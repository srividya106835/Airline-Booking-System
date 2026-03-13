<?php
include "config.php";

$message="";

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

/* check if email exists */

$check = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($check);

if($result->num_rows > 0){

$message="Email already exists. Please login.";

}else{

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if($conn->query($sql)){
header("Location: login.php");
exit();
}else{
$message="Error creating account";
}

}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Register | SkyWings Airline</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(120deg,#007bff,#00c6ff);
font-family:Arial;
}

.register-box{
width:380px;
background:white;
padding:40px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.3);
text-align:center;
}

.logo{
font-size:26px;
font-weight:bold;
color:#007bff;
margin-bottom:15px;
}

input{
margin-bottom:15px;
}

.btn-register{
width:100%;
background:#007bff;
color:white;
}

.btn-register:hover{
background:#0056b3;
}

.error{
color:red;
margin-bottom:10px;
}

</style>

</head>

<body>

<div class="register-box">

<div class="logo">✈ SkyWings Airline</div>

<h4>Create Account</h4>

<?php
if($message!=""){
echo "<p class='error'>$message</p>";
}
?>

<form method="POST">

<input type="text" name="name" class="form-control" placeholder="Full Name" required>

<input type="email" name="email" class="form-control" placeholder="Email Address" required>

<input type="password" name="password" class="form-control" placeholder="Password" required>

<button class="btn btn-register" name="register">Register</button>

</form>

<p class="mt-3">Already have an account?</p>

<a href="login.php">Login</a>

</div>

</body>
</html>