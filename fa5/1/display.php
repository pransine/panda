<?php
$namePattern = "/^[a-zA-Z ]+$/";
$addressPattern = "/^[a-zA-Z0-9 ,.()-]+$/";
$errors = [];
$show_data = false;
$out = [
    'fname' => '', 'mname' => '', 'lname' => '', 'dob' => '', 'address' => ''
];
$blank_submission = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = trim($_POST["fname"] ?? '');
    $mname = trim($_POST["mname"] ?? '');
    $lname = trim($_POST["lname"] ?? '');
    $dob = trim($_POST["dob"] ?? '');
    $address = trim($_POST["address"] ?? '');

    if ($fname === '' && $mname === '' && $lname === '' && $dob === '' && $address === '') {
        $blank_submission = true;
    } else {
        if (!preg_match($namePattern, $fname)) {
            $errors[] = "First name: only letters and spaces allowed.";
        }
        if (!preg_match($namePattern, $mname)) {
            $errors[] = "Middle name: only letters and spaces allowed.";
        }
        if (!preg_match($namePattern, $lname)) {
            $errors[] = "Last name: only letters and spaces allowed.";
        }
        if (!preg_match($addressPattern, $address)) {
            $errors[] = "Address contains invalid special characters.";
        }

        if (empty($errors)) {
            $show_data = true;
            $out['fname'] = $fname;
            $out['mname'] = $mname;
            $out['lname'] = $lname;
            $out['dob'] = $dob;
            $out['address'] = $address;
        }
    }

} elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["fname"])) {
    $gfname = trim($_GET["fname"] ?? '');
    $gmname = trim($_GET["mname"] ?? '');
    $glname = trim($_GET["lname"] ?? '');
    $gdob = trim($_GET["dob"] ?? '');
    $gaddress = trim($_GET["address"] ?? '');

    if (!preg_match($namePattern, $gfname)) {
        $errors[] = "First name (GET) invalid.";
    }
    if (!preg_match($namePattern, $gmname)) {
        $errors[] = "Middle name (GET) invalid.";
    }
    if (!preg_match($namePattern, $glname)) {
        $errors[] = "Last name (GET) invalid.";
    }
    if (!preg_match($addressPattern, $gaddress)) {
        $errors[] = "Address (GET) contains invalid special characters.";
    }

    if (empty($errors)) {
        $show_data = true;
        $out['fname'] = $gfname;
        $out['mname'] = $gmname;
        $out['lname'] = $glname;
        $out['dob'] = $gdob;
        $out['address'] = $gaddress;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Personal Information</title>
<style>

        body{

            font-family: Arial, sans-serif;

            background: linear-gradient(135deg,#FFE4E1,#FFF9C4);

            display:flex;

            justify-content:center;

            align-items:center;

            min-height:100vh;

        }

        .card{

            width:550px;

            background:white;

            padding:30px;

            border-radius:20px;

            box-shadow:0 4px 15px rgba(0,0,0,0.1);

        }

        h2{

            text-align:center;

            color:#d86c9a;

        }

        .info{

            background:#FFFDE7;

            padding:12px;

            margin:10px 0;

            border-radius:10px;

        }

        .error{

            color:red;

            margin-bottom:8px;

            font-weight:bold;

        }

        .btn{

            display:block;

            text-align:center;

            text-decoration:none;

            margin-top:20px;

            padding:12px;

            border-radius:10px;

            background:#F8BBD0;

            color:black;

        }
</style>
</head>
<body>
<div class="card">
<?php

if (!empty($errors)) {

    echo "<h2>Inputs were not recorded. Please try again.</h2>";

    foreach ($errors as $error) {

        echo "<div class='error'>$error</div>";

    }

} elseif ($show_data) {

    echo "<h2>Personal Information</h2>";

    echo "<div class='info'><strong>First Name:</strong> " . htmlspecialchars($out['fname']) . "</div>";

    echo "<div class='info'><strong>Middle Name:</strong> " . htmlspecialchars($out['mname']) . "</div>";

    echo "<div class='info'><strong>Last Name:</strong> " . htmlspecialchars($out['lname']) . "</div>";

    echo "<div class='info'><strong>Date of Birth:</strong> " . htmlspecialchars($out['dob']) . "</div>";

    echo "<div class='info'><strong>Address:</strong> " . htmlspecialchars($out['address']) . "</div>";

}

?>
<a href="index.php" class="btn">Back to Form</a>
</div>
</body>
</html>