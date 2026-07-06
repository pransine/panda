<?php
include("db.php");

$message = "";

if(isset($_POST['register']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password == $confirm)
    {
        $sql = "INSERT INTO users
                (firstname, lastname, email, username, password)
                VALUES
                ('$fname','$lname','$email','$username','$password')";

        mysqli_query($conn,$sql);

        $message = "Registration Successful!";
    }
    else
    {
        $message = "Password and Confirm Password are not the same.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Registration</h2>

<form method="POST">

<input type="text" name="fname" placeholder="First Name" required>

<input type="text" name="lname" placeholder="Last Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<input type="password" name="confirm" placeholder="Confirm Password" required>

<button type="submit" name="register">
Register
</button>

</form>

<p><?php echo $message; ?></p>

<p>
<a href="login.php">Go to Login</a>
</p>

</div>

</body>
</html>