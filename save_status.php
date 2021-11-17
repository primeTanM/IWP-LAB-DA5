<?php
include "connect.php";
session_start();
$sql="UPDATE booking SET DeliveryStatus='{$_POST["Status"]}' WHERE BookingId={$_POST["id"]}";
echo "{$_SESSION['counter']}";
    if (mysqli_query($con, $sql)) {
        header('Location: Change_status.php');
      }
?>