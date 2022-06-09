<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM returnbook  WHERE ReturnStatus='not return' ";
$result = mysqli_query($conn, $sql);
?>