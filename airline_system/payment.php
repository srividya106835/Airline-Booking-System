<?php
include "config.php";

$booking_id=$_GET['id'];

if(isset($_POST['pay'])){

$amount=$_POST['amount'];
$method=$_POST['method'];

$sql="INSERT INTO payment(booking_id,amount,method)
VALUES('$booking_id','$amount','$method')";

$conn->query($sql);

header("Location: ticket.php?id=$booking_id");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Payment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(120deg,#4facfe,#00f2fe);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:Arial;
}

.payment-box{
background:white;
padding:40px;
border-radius:15px;
width:420px;
box-shadow:0 15px 35px rgba(0,0,0,0.3);
}

.title{
text-align:center;
font-size:28px;
font-weight:bold;
margin-bottom:20px;
color:#007bff;
}

.form-control{
border-radius:10px;
padding:10px;
}

.btn-pay{
width:100%;
background:#007bff;
border:none;
padding:12px;
font-size:18px;
border-radius:10px;
}

.btn-pay:hover{
background:#0056b3;
}

.payment-icons{
text-align:center;
margin-bottom:15px;
font-size:24px;
}

</style>

</head>

<body>

<div class="payment-box">

<div class="title">💳 Secure Payment</div>

<div class="payment-icons">
💳 🏦 📱
</div>

<form method="POST">

<div class="mb-3">

<label>Amount</label>

<input type="number" name="amount" class="form-control" placeholder="Enter amount" required>

</div>

<div class="mb-3">

<label>Payment Method</label>

<select name="method" class="form-control">

<option>Credit Card</option>
<option>Debit Card</option>
<option>UPI</option>
<option>Net Banking</option>

</select>

</div>

<button class="btn btn-pay" name="pay">Pay Now</button>

</form>

</div>

</body>

</html>