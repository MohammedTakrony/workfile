<?php
include('connect.php');
$n1=$_GET['n1'];
$sql = "DELETE FROM Addsuer where wID ='$n1' ";
$result = $conn->query($sql);
header('Location:http://mohammedtakrony.epizy.com/shuser.php?n1=')
 ?>
