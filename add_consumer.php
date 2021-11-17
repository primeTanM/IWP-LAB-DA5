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

<form class="submit-form" action="save_consumer.php" method="POST">
<h1>Add Consumer</h1>
<div class="omrs-input-group">
  
  <label class="omrs-input-underlined">
    <input type="number" id="ID" name="ID" required>
    <span class="omrs-input-label">Consumer ID</span>
  </label>
</div>
<div class="omrs-input-group">
  <label class="omrs-input-underlined">
    <input type="text" id="name" name="name">
    <span class="omrs-input-label">Consumer name</span>
  </label>
</div>
<div class="omrs-input-group">
  <label class="omrs-input-underlined">
  <span>Choose a Connection Type</span>
  <select id="ConnType" name="ConnType">
    <option value="DOM">Domestic</option>
    <option value="COM">Commercial</option>
  </select>
  </label>
</div>

<!-- 
  <label for="ID">Consumer ID:</label><br>
  <input type="number" id="ID" name="ID"><br>
  <label for="name">Consumer name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="ConnType">Choose a Connection Type:</label><br>
  <select id="ConnType" name="ConnType">
    <option value="DOM">Domestic</option>
    <option value="COM">Commercial</option>
  </select><br><br> -->
  <input type="submit" value="Submit" class="button-40">
</form> 



</body>
</html>