<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM bookreservation ORDER BY BookReservID ";
$result = mysqli_query($conn, $sql);
?>