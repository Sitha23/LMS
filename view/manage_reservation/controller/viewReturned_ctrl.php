<?php 
include "DatabaseCon.php";
$sql = "SELECT * FROM returnbook WHERE ReturnStatus='return' ";
$result = mysqli_query($conn, $sql);
?>