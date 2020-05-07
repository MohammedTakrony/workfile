<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Add</title>
  </head>
  <body>
    <form action="addfile3.php" method="POST" enctype="multipart/form-data">
      <label>From</label><br>
      <select name="wto">
        <!-- <option>Admin</option> -->
        <option>Employee</option>
        <!-- <option>Customer</option> -->
      </select><br>
      <label>Reason for Contacting Us</label><br>
      <select name="wtype">
        <option>Job Application</option>
        <option>Monthly Service</option>
        <option>Payment</option>
        <option>Speak with Technician</option>
        <option>Service Needed</option>
      </select><br>

      <label>Subject</label><br>
      <input type="" name="wtitle"><br>
      <label>Message</label><br>
      <textarea name="wsubject"></textarea><br>
      <input type="file" name="wattachment"><br>
      <input type="submit" name="">

    </form>
  </body>
</html>
