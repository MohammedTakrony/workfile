<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>search for employees</title>
    <style media="screen">
      table, tr , th, td {
        border: 1px solid black ;
      }
    </style>
  </head>
  <body>
<form action="shuser.php" method="get">
  <input type="text" name="n1" >
  <input type="submit" name="" >
 </form>
 <table>
   <tr>
     <th>Delete</th>
     <th>Save</th>
     <th>Status</th>
     <th>Country</th>
     <th>Sex</th>
     <th>Tele</th>
     <th>Password</th>
     <th>AddDate</th>
     <th>Username</th>
     <th>Name</th>
     <th>ID</th>

   </tr>
<?php
error_reporting(0);
include('connect.php');
$n1 = $_GET['n1'];
$sql = "SELECT * FROM Addsuer WHERE wUsername like '%$n1%' or wName like '%$n1%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
 ?>
   <tr>
       <td><a href="deleteuser.php?n1=<?php echo $row['wID'] ?>" >Delete</a></td>
     <form action="updateuser.php" method="get" >


     <td><input type="submit" name="" value="save"></td>
     <input type="hidden" name="wID" value=" <?php echo $row['wID'] ?>">
    <td>
      <select  name="status">
         <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
         <option value="Admin">Admin</option>
         <option value="Customer">Customer</option>
         <option value="Employee">Employee</option>
       </select>
     </td>
      </form>

    <td><?php echo $row['wCountry'] ?></td>
    <td><?php echo $row['wSex'] ?></td>
    <td><?php echo $row['wTele'] ?></td>
    <td><?php echo $row['wPassword'] ?></td>
    <td><?php echo $row['wDate'] ?></td>
    <td><?php echo $row['wUsername'] ?></td>
    <td><?php echo $row['wName'] ?></td>
    <td><?php echo $row['wID'] ?></td>

   </tr>
<?php
 }
 ?>



 </table>
 <br>
  Back to My Page <button><a href="admin.php">Back</a></button>
  </body>
</html>
