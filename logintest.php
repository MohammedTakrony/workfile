<?php
include('connect.php');
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$sql="SELECT * FROM Addsuer WHERE wUsername='$n1' AND wPassword='$n2'";
$result=$conn-> query($sql);
 while($row=$result-> fetch_assoc()) {
$count = $result -> num_rows;
}
 if($count >0){
   session_start();
   $_SESSION['usernameworkfile'] = $n1 ;
   header('Location:http://mohammedtakrony.epizy.com/index.php');

}
 else {

  header('Location:http://mohammedtakrony.epizy.com/login1.php');

}

  ?>
