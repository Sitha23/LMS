<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM roomreservation ORDER BY RoomReservID ";
$result = mysqli_query($conn, $sql);
?>