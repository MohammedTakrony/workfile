<?php
session_start();
$_SESSION['usernameworkfile '] =$n1 ;
$sql = "SELECT * FROM  Addsuer WHERE wUsername='$n1'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {
echo $row ;


}
?>
