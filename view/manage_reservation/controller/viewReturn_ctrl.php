<?php 
include "DatabaseCon.php";

$sql = "SELECT * FROM returnbook ORDER BY ReturnBookID ";
$result = mysqli_query($conn, $sql);
?>