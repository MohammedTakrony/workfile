<?php
include('connect.php');
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$sql="SELECT * FROM Addsuer WHERE wUsername='$n1' AND wPassword='$n2'";
$result=$conn-> query($sql);
 while($row=$result-> fetch_assoc()) {
$count = $result-> num_rows;
}

// echo $count;
// }

//
 // if ($count >0) {
 if($count > 0){
     // header('Location:https://localhost/workfile/index.php');




   session_start();
   $_SESSION['usernameworkfile'] = $n1 ;
   header('Location:https://localhost/workfile/index.php');

   // header('Location:https://localhost/workfile/login1.php');
//
}
//
 else {
  // session_start();
  // $_SESSION['usernameworkfile'] = $n1 ;
  header('Location:https://localhost/workfile/login1.php');

  // header('Location:https://localhost/workfile/index.php');
//
}

  ?>
