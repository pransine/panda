<?php
session_start();
include("db.php");

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['reset']))
{
    $username = $_SESSION['username'];

    $current = $_POST['current'];
    $new = $_POST['new'];
    $renew = $_POST['renew'];

    $sql = "SELECT * FROM users
            WHERE username='$username'";

    $result = mysqli_query($conn,$sql);

    $user = mysqli_fetch_assoc($result);

    if($current != $user['password'])
    {
        $message =
        "Current password is not the same with the old password";
    }
    elseif($new != $renew)
    {
        $message =
        "New password and ReEnter new password should be the same.";
    }
    else
    {
        $update =
        "UPDATE users
         SET password='$new'
         WHERE username='$username'";

        mysqli_query($conn,$update);

        $message = "Password Updated Successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Reset Password</h2>

<form method="POST">

<input
type="password"
name="current"
placeholder="Current Password"
required>

<input
type="password"
name="new"
placeholder="New Password"
required>

<input
type="password"
name="renew"
placeholder="Re-enter New Password"
required>

<button type="submit" name="reset">
Reset Password
</button>

</form>

<p><?php echo $message; ?></p>

<a href="profile.php">
Back to Profile
</a>

</div>

</body>
</html>