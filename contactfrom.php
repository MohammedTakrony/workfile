<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Edit Webside</h3>

<div class="container">
  <?php
  include('connect.php');
  $lag=$_GET['lag'];
  $sql = "SELECT * FROM info WHERE wlag='$wlag' ";
  $result = $conn->query($sql);
   while($row = $result->fetch_assoc()) {
  ?>
  <form action="updateinfo.php" method="POST" enctype="multipart/form-data">
    <label for="fname">Languange</label>
    <input style="display:none;" type="text" id="fname" name="wlag" value="<?php echo $row['wlag'] ?>">
      <input style="display:none;" type="text" id="fname" name="wimg" value="<?php echo $row['wimg'] ?>">

      
    <label for="fname">webname</label>
    <input type="text" id="fname" name="wname" value="<?php echo $row['wname'] ?>">
    <label for="fname">frist line</label>
    <input type="text" id="fname" name="wline1" value="<?php echo $row['wline1'] ?>">
    <label for="fname">second</label>
    <input type="text" id="fname" name="wline2" value="<?php echo $row['wline2'] ?>">
    <label for="fname">third</label>
    <input type="text" id="fname" name="wline3" value="<?php echo $row['wline3'] ?>">
    <label for="fname">forith</label>
    <input type="text" id="fname" name="wline4" value="<?php echo $row['wline4'] ?>">
    <label for="fname">fift</label>
    <input type="text" id="fname" name="wline5" value="<?php echo $row['wline5'] ?>">
    <label for="fname">login</label>
    <input type="text" id="fname" name="wbutt1" value="<?php echo $row['wbutt1'] ?>">
    <label for="fname">sign in</label>
    <input type="text" id="fname" name="wbutt2" value="<?php echo $row['wbutt2'] ?>">
    <label for="fname">my page</label>
    <input type="text" id="fname" name="wbutt3" value="<?php echo $row['wbutt3'] ?>">

    <label for="fname">picture</label>
    <input type="file" id="fname" name="wbutt3" value="<?php echo $row['wimg'] ?>">



    <input type="submit" value="update">
  </form>
<?php
}
 ?>
</div>

</body>
</html>
