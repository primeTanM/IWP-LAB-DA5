<?php
include "connect.php";
session_start();
$sql="INSERT INTO booking VALUES ({$_POST["ID"]},{$_POST["ConId"]},'{$_POST["Status"]}')";
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
    <h1> Booking Added </h1>
    <?php
    echo "Booking Id: {$_POST["ID"]}<br>";
    echo "Consumer Id: {$_POST["ConId"]}<br>";
    echo "Delivery Status: {$_POST["Status"]}<br>";
    ?>
</body>
</html>