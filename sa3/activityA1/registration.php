<?php
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password == $confirm)
    {
        $message = "
        <h3>Registration Successful</h3>

        First Name: $fname <br>
        Last Name: $lname <br>
        Email: $email <br>
        Username: $username
        ";
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
    <title>Activity A1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Registration Form</h2>
<form method="POST">
    <input type="text" name="fname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm" placeholder="Confirm Password" required>
    <button type="submit">
        Register
    </button>
</form>
<div class="result">
    <?php echo $message; ?>
</div>
</div>
</body>
</html>