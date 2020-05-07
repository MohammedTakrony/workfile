<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Add</title>
  </head>
  <body>
    <?php
    include('connect.php');
    $n1=$_GET['n1'];
    $sql = "SELECT * FROM wfile WHERE wID='$n1' ";
    $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
    <form action="updatefile.php" method="POST" enctype="multipart/form-data">
      <input style="display:none;" type="" name="wID" value="<?php echo $row['wID'] ?>">
      <input style="display:none;" type="" name="wold" value="<?php echo $row['wattachment'] ?>">
      <label>For to</label> <br>
      <select name="wto">
        <option><?php echo $row['wto'] ?></option>
        <option>Admin</option>
        <option>Employee</option>
        <option>Customer</option>
      </select><br>
      <label>Reason for Contacting Us</label><br>
      <select name="wtype">
        <option>Job Application</option>
        <option>Monthly Service</option>
        <option>Payment</option>
        <option>Speak with Technician</option>
        <option>Service Needed</option>
      </select><br>

      <label>Subject</label> <br>
      <input type="" name="wtitle" value="<?php echo $row['wtitle'] ?>"> <br>
      <label>Message</label> <br>
      <textarea name="wsubject"><?php echo $row['wsubject'] ?></textarea><br>
      <input type="file" name="wattachment"><br>
      <input type="submit" name="" > <br>
      <img src="file/<?php echo $row['wattachment'] ?>">

    </form>
  <?php
 }
   ?>
  </body>
</html>
