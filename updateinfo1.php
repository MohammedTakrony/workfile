<?php
include ('connect.php');
$wlag=$_POST['wlag'];
$wname=$_POST['wname'];
if ($wimg==null) {
  $wimg==$_POST['oldwimg'];
} else {
  unlink("file/".$_POST['oldwimg']);
  $wattachmenttmb=$_FILES['wimg']['tmb_name'];
  $upload_file='file/';
  move_uploaded_file($wattachmenttmb, $upload_file.$wimg);
}
$wline1=$_POST['wline1'];
$wline2=$_POST['wline2'];
$wline3=$_POST['wline3'];
$wline4=$_POST['wline4'];
$wline5=$_POST['wline5'];
$wbutt1=$_POST['wbutt1'];
$wbutt2=$_POST['wbutt2'];
$wbutt3=$_POST['wbutt3'];
$wbutt4=$_POST['wbutt4'];
$sql = "UPDATE info SET
wname='$wname',
wimg='$wimg',
wline1='$wline1',
wline2='$wline2',
wline3='$wline3',
wline4='$wline4',
wline5='$wline5',
wbutt1='$wbutt1',
wbutt2='$wbutt2',
wbutt3='$wbutt3',
wbutt4='$wbutt4' where wlag ='$wlag'";
$result = $conn->query($sql);
header('Location:http://mohammedtakrony.epizy.com/admin.php')

 ?>
