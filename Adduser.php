<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
  </head>
  <body>
    <center>

    <label>Add new user</label>

<?php
error_reporting(0);
$q1=$_GET['q1'];
if($q1 == 1){
  echo "We already have the same username";
}
if($q1 == 2){
  echo "The password is not the same please try again ";
}

    ?>

    <form action="Adduser1.php" method="get" >


    Your Name: <input type="text" name="wName" placeholder="Yourname">
    <br>
    User Name:  <input type="text" name="wUsername" placeholder="Username">
    <br>
    Date of Birth: <input type="date" name="wDate" >
    <br>
    New Password: <input type="password" name="wPassword" >
    <br>
    Retype Password: <input type="password" name= "wPassword1" >
    <br>
    Phone: <input type="tel" name="wTele" >
    <br>
    Sex: <input type="radio" name="wSex" id="g1"/>
    <label for="g1">Male </label>
    <input type="radio" name="wSex" id="g2"/>
    <label for="g2">Female </label>
    <br>

    Country: <input type="text" name="wCountry" value="" >


    <br>

<input type="submit">
    </form>

    </center>
  </body>
</html>
