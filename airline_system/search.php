<?php
include "config.php";

$source=$_POST['source'];
$destination=$_POST['destination'];

$sql="SELECT * FROM flights 
WHERE source='$source' 
AND destination='$destination'";

$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>

<title>Available Flights</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f7ff;
font-family:Arial;
padding:40px;
}

.flight-card{
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 6px 15px rgba(0,0,0,0.15);
margin-bottom:20px;
transition:0.3s;
}

.flight-card:hover{
transform:scale(1.02);
}

.flight-route{
font-size:22px;
font-weight:bold;
}

.price{
color:#007bff;
font-size:20px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h2 class="mb-4">Available Flights ✈</h2>

<?php

if($result->num_rows>0){

while($row=$result->fetch_assoc()){

?>

<div class="flight-card">

<div class="row align-items-center">

<div class="col-md-3">

<h5>Flight <?php echo $row['id']; ?></h5>

<p><?php echo $row['departure_time']; ?></p>

</div>

<div class="col-md-3 flight-route">

<?php echo $row['source']; ?> ➝ <?php echo $row['destination']; ?>

</div>

<div class="col-md-3">

<p>Date: <?php echo $row['departure_date']; ?></p>

</div>

<div class="col-md-2 price">

₹<?php echo $row['price']; ?>

</div>

<div class="col-md-1">

<a href="book.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Book</a>

</div>

</div>

</div>

<?php
}

}else{

echo "<h4>No flights found</h4>";

}
?>

</div>

</body>

</html>