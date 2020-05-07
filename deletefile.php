<?php
include('connect.php');
$n1=$_GET['n1'];
$n2="file/".$_GET['n2'];
unlink($n2);
$sql = "DELETE FROM wfile where wID = '$n1' ";
$result = $conn->query($sql);
header('Location:https://localhost/workfile/search.php?n1=')
 ?>
