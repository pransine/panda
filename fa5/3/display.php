<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>My Favorite Colors</title>
<style>
       body{
           font-family: Arial, sans-serif;
           background: linear-gradient(135deg,#FFE4E1,#FFF9C4);
           min-height:100vh;
           display:flex;
           justify-content:center;
           align-items:center;
       }
       .card{
           width:600px;
           background:white;
           padding:30px;
           border-radius:20px;
           box-shadow:0 4px 15px rgba(0,0,0,0.1);
       }
       h1{
           text-align:center;
           color:#d86c9a;
           margin-bottom:25px;
       }
       .color-box{
           padding:15px;
           margin:10px 0;
           border-radius:10px;
           background:#FFFDE7;
           font-size:18px;
       }
       .btn{
           display:block;
           text-align:center;
           margin-top:20px;
           padding:12px;
           background:#F8BBD0;
           text-decoration:none;
           color:black;
           border-radius:10px;
       }
       .btn:hover{
           background:#f4a8c6;
       }
</style>
</head>
<body>
<div class="card">
<h1>My Favorite Colors</h1>
<div class="color-box">
       My Favorite Color 1:
<?php echo htmlspecialchars($_SESSION['color1']); ?>
</div>
<div class="color-box">
       My Favorite Color 2:
<?php echo htmlspecialchars($_SESSION['color2']); ?>
</div>
<div class="color-box">
       MyFavorite Color 3:
<?php echo htmlspecialchars($_SESSION['color3']); ?>
</div>
<div class="color-box">
       My Favorite Color 4:
<?php echo htmlspecialchars($_SESSION['color4']); ?>
</div>
<div class="color-box">
       My Favorite Color 5:
<?php echo htmlspecialchars($_SESSION['color5']); ?>
</div>
<a href="colors.php" class="btn">
       Enter New Colors
</a>
</div>
</body>
</html>