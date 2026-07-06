<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "sa3_db"
);

if(!$conn)
{
    die("Database Connection Failed");
}

?>