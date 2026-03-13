<?php
include "../db.php";

$aircraft = $_POST['aircraft_id'];
$from     = $_POST['from_airport'];
$to       = $_POST['to_airport'];
$dep      = $_POST['departure'];
$arr      = $_POST['arrival'];

$sql = "INSERT INTO flights(aircraft_id, from_airport, to_airport, departure, arrival)
        VALUES('$aircraft','$from','$to','$dep','$arr')";

$conn->query($sql);

echo "Flight Added Successfully!";
?>