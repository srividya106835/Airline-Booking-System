<?php
$conn = new mysqli("localhost","root","","airline_system");

if($conn->connect_error){
    die("Connection failed");
}
?>