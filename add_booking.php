<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<nav>
        <h1>LPG Booking System</h1>
    </nav>
<?php
  include "connect.php";
  session_start();
  $_SESSION['counter']=0;
  ?>
<form class="submit-form" action="save_booking.php" method="POST">
<h1>Make Booking</h1>
<div class="omrs-input-group">
  <label class="omrs-input-underlined">
    <input type="number" id="ID" name="ID" required>
    <span class="omrs-input-label">Booking ID</span>
  </label>
</div>
<div class="omrs-input-group">
  <label class="omrs-input-underlined">
    <input type="text" id="ConId" name="ConId">
    <span class="omrs-input-label">Consumer ID</span>
  </label>
</div>
<div class="omrs-input-group">
  <label class="omrs-input-underlined">
  <span>Choose a Delivery Status</span>
  <select id="Status" name="Status">
    <option value="DEL">Delivered</option>
    <option value="NYD">Not Delivered</option>
    <option value="DEY">Delayed</option>
  </select>
  </label>
</div>

  <input class="button-40" type="submit" value="Submit">
</form>
</body>
</html>