<?php
if(isset($_POST['submit'])){
    $expiry = time() + 300; 
    setcookie("firstname", $_POST['firstname'], $expiry);
    setcookie("middlename", $_POST['middlename'], $expiry);
    setcookie("lastname", $_POST['lastname'], $expiry);
    setcookie("age", $_POST['age'], $expiry);
    setcookie("bday", $_POST['bday'], $expiry);
    setcookie("address", $_POST['address'], $expiry);
    setcookie("sex", $_POST['sex'], $expiry);
    setcookie("civilstatus", $_POST['civilstatus'], $expiry);
    setcookie("submitted_at", time(), $expiry);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

if(isset($_COOKIE['submitted_at'])){
    $elapsed = time() - intval($_COOKIE['submitted_at']);
    if($elapsed >= 20){
        setcookie("firstname", "", time()-3600);
        setcookie("middlename", "", time()-3600);
        setcookie("lastname", "", time()-3600);
        setcookie("age", "", time()-3600);
        setcookie("bday", "", time()-3600);
        setcookie("address", "", time()-3600);
        setcookie("sex", "", time()-3600);
        setcookie("civilstatus", "", time()-3600);
        setcookie("submitted_at", "", time()-3600);
        setcookie("cleared_10", "", time()-3600);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }elseif($elapsed >= 10){
        if(!isset($_COOKIE['cleared_10'])){
            setcookie("sex", "", time()-3600);
            setcookie("civilstatus", "", time()-3600);
            $remaining = max(1, 20 - $elapsed);
            setcookie("cleared_10", 1, time() + $remaining);
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cookie Activity</title>
<style>
       body{
           font-family: Times;
           background: linear-gradient(135deg,#FFE4E1,#FFF9C4);
           min-height:100vh;
           display:flex;
           justify-content:center;
           align-items:center;
       }
       .container{
           width:500px;
           background:white;
           padding:30px;
           border-radius:20px;
           box-shadow:0 4px 15px rgba(0,0,0,0.1);
       }
       h2{
           text-align:center;
           color:#d86c9a;
       }
       input{
           width:100%;
           padding:10px;
           margin-top:10px;
           margin-bottom:10px;
           border:1px solid #ddd;
           border-radius:10px;
           box-sizing:border-box;
       }
       button{
           width:100%;
           padding:12px;
           background:#F8BBD0;
           border:none;
           border-radius:10px;
           cursor:pointer;
       }
       button:hover{
           background:#f5a9c7;
       }
       .info{
           background:#FFFDE7;
           padding:12px;
           margin-top:10px;
           border-radius:10px;
       }
       .timer{
           text-align:center;
           color:#666;
           margin-bottom:15px;
       }
       .radio-group .group-title{ font-weight:600; margin-right:8px; }
       .radio-group .inline-option{ display:inline-block; margin-right:12px; font-size:14px; }
       .radio-group input[type="radio"]{ width:14px; height:14px; vertical-align:middle; margin-right:6px; }
</style>
</head>
<body>
<div class="container">
<?php if(!isset($_COOKIE['firstname'])) { ?>
<h2>Personal Information</h2>
<form method="post">
<input type="text" name="firstname"
              placeholder="First Name" required>
<input type="text" name="middlename"
              placeholder="Middle Name" required>
<input type="text" name="lastname"
              placeholder="Last Name" required>
<input type="number" name="age" placeholder="Age" min="0">
<input type="date" name="bday" placeholder="Birthday">
<input type="text" name="address" placeholder="Address">
<div class="radio-group" style="margin-top:8px;">
    <span class="group-title">Sex:</span>
    <label class="inline-option"><input type="radio" name="sex" value="Male"> Male</label>
    <label class="inline-option"><input type="radio" name="sex" value="Female"> Female</label>
    <label class="inline-option"><input type="radio" name="sex" value="Other"> Other</label>
</div>
<div class="radio-group" style="margin-top:8px;">
    <span class="group-title">Civil Status:</span>
    <label class="inline-option"><input type="radio" name="civilstatus" value="Single"> Single</label>
    <label class="inline-option"><input type="radio" name="civilstatus" value="Married"> Married</label>
    <label class="inline-option"><input type="radio" name="civilstatus" value="Divorced"> Divorced</label>
    <label class="inline-option"><input type="radio" name="civilstatus" value="Widowed"> Widowed</label>
</div>
<button type="submit" name="submit">
           Save Information
</button>
</form>
<?php } else { ?>
<h2>Personal Information</h2>
<div class="timer">
</div>
<?php
   echo "<div class='info'><strong>First Name:</strong> ".$_COOKIE['firstname']."</div>";
   if(isset($_COOKIE['middlename'])){
       echo "<div class='info'><strong>Middle Name:</strong> ".$_COOKIE['middlename']."</div>";
   }
    echo "<div class='info'><strong>Last Name:</strong> ".$_COOKIE['lastname']."</div>";
    if(isset($_COOKIE['age'])) echo "<div class='info'><strong>Age:</strong> ".$_COOKIE['age']."</div>";
    if(isset($_COOKIE['bday'])) echo "<div class='info'><strong>Birthday:</strong> ".$_COOKIE['bday']."</div>";
    if(isset($_COOKIE['address'])) echo "<div class='info'><strong>Address:</strong> ".$_COOKIE['address']."</div>";
    if(isset($_COOKIE['sex'])) echo "<div class='info'><strong>Sex:</strong> ".$_COOKIE['sex']."</div>";
    if(isset($_COOKIE['civilstatus'])) echo "<div class='info'><strong>Civil Status:</strong> ".$_COOKIE['civilstatus']."</div>";
   ?>
<?php } ?>
</div>
</body>
</html>