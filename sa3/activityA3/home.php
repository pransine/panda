<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Welcome!</h2>

    <h3>
        <?php echo $_SESSION['username']; ?>
    </h3>

    <a href="logout.php">
        Logout
    </a>

</div>

</body>
</html>