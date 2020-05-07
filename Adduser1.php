<?php
include('connect.php');
$wName=$_GET['wName'];
$wUsername=$_GET['wUsername'];
$sql = "SELECT * FROM Addsuer WHERE wUsername='$wUsername'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc()) {

 $count = $result -> num_rows;


}
 echo $count;

 if($count >0){
   header('Location:http://mohammedtakrony.epizy.com/Adduser.php?q1=1');
   exit ();

}

$wDate=$_GET['wDate'];
$wPassword=$_GET['wPassword'];
$wPassword1=$_GET['wPassword1'];
if($wPassword !== $wPassword1){
  header('Location:http://mohammedtakrony.epizy.com/Adduser.php?q1=2');
  exit ();
}
$wTele=$_GET['wTele'];
$wSex=$_GET['wSex'];
$wCountry=$_GET['wCountry'];
$sql= "INSERT INTO Addsuer (wName, wUsername, wDate, wPassword, wTele, wSex, wCountry , status)
 VALUES ('$wName', '$wUsername', '$wDate', '$wPassword', '$wTele', '$wSex', '$wCountry', 'user') ";
$result=$conn->query($sql);
header('Location:http://mohammedtakrony.epizy.com/index.php')

 ?>
