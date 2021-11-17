  <?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<nav>
        <h1>LPG Booking System</h1>
    </nav>
<form class="submit-form" action="display_booking_consumerId.php" method="POST">
<h1>Display Details</h1>  
  <div class="omrs-input-group">
  <label class="omrs-input-underlined">
    <input type="number" id="ID" name="ID" required>
    <span class="omrs-input-label">Consumer ID</span>
  </label>
</div>
<input class="button-40" type="submit" value="Submit">
</form>
<div class="display-consumers">
    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Consumer ID</th>
      <th scope="col">Consumer Name</th>
      <th scope="col">Booking ID</th>
      <th scope="col">Connection Type</th>
      <th scope="col">Delivery Status</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    if(isset($_POST["ID"]))
    {
        echo "<h1> Consumers List </h1>";
    $sql="SELECT * FROM booking INNER JOIN consumer ON booking.ConsumerId=consumer.ConsumerId WHERE consumer.ConsumerId={$_POST["ID"]}";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<th scope='row'>#</th>";
        echo "<td>{$row['ConsumerId']}</td>";
        echo "<td>{$row['ConsumerName']}</td>";
        echo "<td>{$row['BookingId']}</td>";
        echo "<td>{$row['ConnectionType']}</td>";
        echo "<td>{$row['DeliveryStatus']}</td>";
        echo "</tr>";
}
}
?>
</tbody>
</div>
</body>
</html>