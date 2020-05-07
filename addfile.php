<?php
include('connect.php');
$wto=$_POST['wto'];
$wtype=$_POST['wtype'];
session_start();
$wuser=$_SESSION['usernameworkfile'];
$wtime= date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];
$wattachmenttmb=$_FILES['wattachment']['tmp_name'];
$upload_file="file/";
// $upload_file='file/';
// $file_uploads='file/';
// file_uploads='file/;'
move_uploaded_file($wattachmenttmb, $upload_file.$wattachment);
$sql= "INSERT INTO wfile (wto, wtype, wuser, wtime, wtitle, wsubject, wattachment)
 VALUES ('$wto', '$wtype', '$wuser', '$wtime', '$wtitle', '$wsubject', '$wattachment') ";
$result=$conn->query($sql);
header('Location:https://localhost/workfile/search.php')

 ?>
