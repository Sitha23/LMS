<?php 
include "DatabaseCon.php";
$sql = "SELECT * FROM returnbook WHERE ReturnStatus='return' LIMIT 3  ";
$result = mysqli_query($conn, $sql);
?>