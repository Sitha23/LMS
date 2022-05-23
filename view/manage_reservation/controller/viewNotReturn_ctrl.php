<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM returnbook  WHERE ReturnStatus='not return' LIMIT 3";
$result = mysqli_query($conn, $sql);
?>