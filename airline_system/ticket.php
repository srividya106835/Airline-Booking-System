<?php
include "config.php";

$booking_id = $_GET['id'];

$sql = "SELECT booking.id, booking.seats,
flights.id AS flight_id,
flights.source,
flights.destination,
flights.departure_date,
flights.departure_time
FROM booking
JOIN flights ON booking.flight_id = flights.id
WHERE booking.id='$booking_id'";

$result = $conn->query($sql);

if($result && $result->num_rows > 0){
$row = $result->fetch_assoc();
}else{
echo "Ticket not found";
exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Boarding Pass</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(120deg,#0f2027,#203a43,#2c5364);
font-family:Arial;
padding:50px;
}

.ticket{
width:650px;
margin:auto;
background:white;
border-radius:15px;
box-shadow:0 15px 35px rgba(0,0,0,0.3);
overflow:hidden;
}

.header{
background:#007bff;
color:white;
padding:20px;
font-size:24px;
font-weight:bold;
}

.content{
padding:30px;
}

.route{
font-size:26px;
font-weight:bold;
margin-bottom:20px;
}

.details{
display:flex;
justify-content:space-between;
margin-top:20px;
}

.box{
text-align:center;
}

.success{
text-align:center;
color:green;
font-weight:bold;
margin-top:30px;
font-size:20px;
}

</style>

</head>

<body>

<div class="ticket">

<div class="header">
✈ SkyWings Airlines Boarding Pass
</div>

<div class="content">

<div class="route">
<?php echo $row['source']; ?> ➝ <?php echo $row['destination']; ?>
</div>

<div class="details">

<div class="box">
<h6>Date</h6>
<p><?php echo $row['departure_date']; ?></p>
</div>

<div class="box">
<h6>Time</h6>
<p><?php echo $row['departure_time']; ?></p>
</div>

<div class="box">
<h6>Seats</h6>
<p><?php echo $row['seats']; ?></p>
</div>

<div class="box">
<h6>Booking ID</h6>
<p><?php echo $row['id']; ?></p>
</div>

</div>

<div class="success">
✅ Booking Confirmed – Have a nice journey!
</div>

</div>

</div>

</body>

</html>