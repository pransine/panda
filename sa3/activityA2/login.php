<?php
$username = "";
$password = "";
if(isset($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
}
if(isset($_COOKIE['password']))
{
    $password = $_COOKIE['password'];
}
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
        setcookie(
            "username",
            $username,
            time() + 86400
        );
        setcookie(
            "password",
            $password,
            time() + 86400
        );
        echo "<p style='color:green;'>Cookies Saved!</p>";
    }
    else
    {
        echo "<p style='color:red;'>Remember Me not checked.</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Activity A2 - Cookies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Login Form</h2>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Username"
            value="<?php echo $username; ?>"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            value="<?php echo $password; ?>"
            required>

        <label>
            <input type="checkbox" name="remember">
            Remember Me
        </label>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>