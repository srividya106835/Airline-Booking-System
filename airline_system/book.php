<?php
include "config.php";
session_start();

/* check if flight id exists */
if(isset($_GET['id'])){
    $flight_id = $_GET['id'];
}else{
    echo "Flight not selected";
    exit();
}

if(isset($_POST['book'])){

$user_id = $_SESSION['user_id'];
$seats = $_POST['seats'];

$sql = "INSERT INTO booking(user_id,flight_id,seats)
VALUES('$user_id','$flight_id','$seats')";

$conn->query($sql);

$booking_id = $conn->insert_id;

header("Location: payment.php?id=$booking_id");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Book Seats</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(120deg,#007bff,#00c6ff);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Arial;
}

.booking-card{
background:white;
padding:40px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
width:400px;
text-align:center;
}

.booking-card h2{
margin-bottom:20px;
}

.btn-book{
background:#007bff;
color:white;
font-weight:bold;
}

.btn-book:hover{
background:#0056b3;
}

</style>

</head>

<body>

<div class="booking-card">

<h2>💺 Book Your Seats</h2>

<form method="POST">

<div class="mb-3">

<input type="number" name="seats" class="form-control" placeholder="Number of Seats" required>

</div>

<button class="btn btn-book w-100" name="book">

Confirm Booking ✈

</button>

</form>

</div>

</body>
</html>