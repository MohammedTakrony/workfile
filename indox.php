<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Appatchy Spinkler Webside</title> -->
<?php
include('connect.php');
error_reporting(0);
if (is_null($_GET['wlag'])) {
$wlag='en';
} else
  {$wlag=$_GET['wlag'];}
  $sql0="SELECT * FROM info WHERE wlag ='$wlag'";
  $result0= $conn-> query($sql0);
  while($row0 = $result0-> fetch_assoc()) {
  ?>
  <title><?php echo $row0['wname'] ?></title>


    <link rel="stylesheet" type="text/css" href="index.css">
    <?php
    error_reporting(0);
    include('connect.php');
    session_start();
    ?>

    <style type="text/css">

      h1 {

        background : blue ;
      }

    </style>
  </head>
  <body>

    <a href="indox.php?wlag=ar"><button>عربي</button></a>
    <a href="indox.php?wlag=en"><button>English</button></a>

    <center>

    <h1 class="mooo"><?php echo $row0['wline1'] ?></h1>
    <h2 class="moo"><?php echo $row0['wline2'] ?></h2>
    <h3 class="moo"><?php echo $row0['wline3'] ?></h3>


<?php
if (isSet($_SESSION['usernameworkfile'])){

  $n1=$_SESSION['usernameworkfile'];
  $sql = "SELECT * FROM Addsuer WHERE wUsername='$n1' ";
  $result = $conn->query($sql);
   while($row = $result->fetch_assoc()) {
     $status=$row['status'];
     echo $status;
     ?>
    <p>Welcome <?php echo $row['wName']; ?></p>
    <a class="B"href="login1.php" ><button>
      <?php echo $row0['wbutt4'] ?>
</button></a>
    <a href="
    <?php if ($status == 'user'): ?> us.php <?php endif ?>
    <?php if ($status == 'admin'): ?> admin.php <?php endif ?>
    <?php if ($status == 'employee'): ?> em.php <?php endif ?>
" ><button>
    <?php echo $row0['wbutt3'] ?>
   </button></a>
<?php
}}else {
  ?>


    <a class="B" href="login1.php"><button><?php echo $row0['wbutt1'] ?></button></a>



    <a class="B" href="Adduser.php"><button><?php echo $row0['wbutt2'] ?></button></a>


  <?php
}

 ?>

<br>
<img src="Mohammed.jpeg" alt="mo" height="400" title="Mypicture" />
<p class="moo"><?php echo $row0['wline4'] ?></p>
</center>
  </body>
<?php } ?>
</html>
