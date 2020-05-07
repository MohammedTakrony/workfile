<?php
include('connect.php');
$wto=$_POST['wto'];
$wID=$_POST['wID'];
$wtype=$_POST['wtype'];
session_start();
$wuser=$_SESSION['usernameworkfile'];
$wtime= date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];

if ($wattachment==null) {
$wattachment=$_POST['wold'];
}

else {
  unlink("file/".$_POST['wold']);
  $wattachmenttmb=$_FILES['wattachment']['tmp_name'];
  $upload_file='file/';
  move_uploaded_file($wattachmenttmb, $upload_file.$wattachment);
}

// $wattachmenttmb=$_FILES['wattachment']['tmp_name'];
// $upload_file='file/';
// move_uploaded_file($wattachmenttmb, $upload_file.$wattachment);
  $sql="UPDATE wfile SET
  wto='$wto',
  wtype='$wtype',
    wuser='$wuser',
    wtitle='$wtitle',
      wtime='$wtime',
        wsubject='$wsubject',
          wattachment='$wattachment'
  where wID='$wID'";
$result=$conn->query($sql);
  header('Location:http://mohammedtakrony.epizy.com/search.php')
?>
