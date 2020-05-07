<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login Page</title>
    <?php
    session_start();
    session_unset();
    session_destroy();


     ?>
  </head>
  <body>
    <center>
    <form action="logintest.php" method="get">


    <h1>Login Page</h1>

    Username  : <input type="text" name="n1" placeholder="Enter your username" />
      <br />
    Password : <input type="password" name="n2" placeholder="Enter your password" />
    <br>
      <input type="checkbox" id="bc"/> <label for="bc">  remember me </label>
      <br>
      <a href="forgetPassword.html">Forgot The Password</a>
      <br>

      <input type="submit" name="" value="submit">
</form>
</center>
  </body>
</html>
