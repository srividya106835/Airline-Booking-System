<?php
include "config.php";
session_start();

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users
WHERE email='$email' AND password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0){

$row=$result->fetch_assoc();

$_SESSION['user_id']=$row['id'];

header("Location: search.php");

}

else{

echo "Invalid login";

}

}
?>

<form method="POST">

<h2>Login</h2>

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="login">Login</button>

<p>New user?</p>

<a href="register.php">Create Account</a>

</form>