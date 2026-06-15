<?php
session_start();
if(isset($_POST['submit'])){
   $_SESSION['color1'] = $_POST['color1'];
   $_SESSION['color2'] = $_POST['color2'];
   $_SESSION['color3'] = $_POST['color3'];
   $_SESSION['color4'] = $_POST['color4'];
   $_SESSION['color5'] = $_POST['color5'];
   header("Location: display.php");
   exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Favorite Colors</title>
<style>
       body{
           font-family: Arial, sans-serif;
           background: linear-gradient(135deg,#FFE4E1,#FFF9C4);
           min-height:100vh;
           display:flex;
           justify-content:center;
           align-items:center;
       }
       .container{
           width:550px;
           background:white;
           padding:30px;
           border-radius:20px;
           box-shadow:0 4px 15px rgba(0,0,0,0.1);
       }
       h1{
           text-align:center;
           color:#d86c9a;
           margin-bottom:20px;
       }
       .row{
           margin-bottom:15px;
       }
       label{
           display:block;
           margin-bottom:5px;
           font-weight:bold;
       }
       input{
           width:100%;
           padding:10px;
           border:1px solid #ddd;
           border-radius:10px;
           box-sizing:border-box;
       }
       button{
           width:100%;
           padding:12px;
           border:none;
           border-radius:10px;
           background:#F8BBD0;
           font-size:16px;
           cursor:pointer;
           margin-top:15px;
       }
       button:hover{
           background:#f4a8c6;
       }
</style>
</head>
<body>
<div class="container">
<h1>Enter Your Favorite Colors!</h1>
<form method="post">
<div class="row">
<label>Favorite Color 1</label>
<input type="text" name="color1" required>
</div>
<div class="row">
<label>Favorite Color 2</label>
<input type="text" name="color2" required>
</div>
<div class="row">
<label>Favorite Color 3</label>
<input type="text" name="color3" required>
</div>
<div class="row">
<label>Favorite Color 4</label>
<input type="text" name="color4" required>
</div>
<div class="row">
<label>Favorite Color 5</label>
<input type="text" name="color5" required>
</div>
<button type="submit" name="submit">
           Send Colors
</button>
</form>
</div>
</body>
</html>