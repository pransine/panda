<?php
session_start();
$correctUsername = "admin";
$correctPassword = "12345";

$message = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(
        $username == $correctUsername &&
        $password == $correctPassword
    )
    {
        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();
    }
    else
    {
        $message = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity A3 Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Login</h2>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Username"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

        <button type="submit" name="login">
            Login
        </button>

    </form>

    <p>
        <?php echo $message; ?>
    </p>

</div>

</body>
</html>