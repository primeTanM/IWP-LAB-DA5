<?php
include "connect.php";
session_start();
$sql="INSERT INTO consumer VALUES ({$_POST["ID"]},'{$_POST["name"]}','{$_POST["ConnType"]}')";
mysqli_query($con, $sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<nav>
        <h1>LPG Booking System</h1>
    </nav>
    <div class="consumer-added">
        <h1> Consumer Added </h1>
        <?php
        echo "Conumer Id: {$_POST["ID"]}<br>";
        echo "Consumer Name: {$_POST["name"]}<br>";
        echo "Connection Type: {$_POST["ConnType"]}<br>";
        ?>
    </div>
    
</body>
</html>