<?php
session_start();
include("db.php");

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM users
        WHERE username='$username'";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>User Information</h2>

<p>
First Name:
<?php echo $user['firstname']; ?>
</p>

<p>
Last Name:
<?php echo $user['lastname']; ?>
</p>

<p>
Email:
<?php echo $user['email']; ?>
</p>

<p>
Username:
<?php echo $user['username']; ?>
</p>

<br>

<a href="reset-password.php">
Reset Password
</a>

<br><br>

<a href="logout.php">
Logout
</a>

</div>

</body>
</html>