<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
  </head>
  <?php
include 'config.php';
?>

<?php
$name = $password = '';

if(isset($_POST['signup'])){
    if(!empty($_POST['user-name']) && !empty($_POST['pass'])){
      $name = $_POST['user-name'];
      $password =  $_POST['pass'];

        $sql = "INSERT INTO users(username,password) VALUES('$name','$password')";
        mysqli_query($conn,$sql);

        header('location:login.html');

        mysqli_close($conn);
    };
}


?>
  <body>
    <form action="signup.php" method="post" >
      <div>
        <label for="uname">User Name: </label>
        <input type="text" name="user-name" id="uname" />
      </div>
      <div>
        <label for="pass">Password: </label>
        <input type="password" name="pass" id="pass" />
      </div>
      <input type="submit" value="Sign Up" name="signup" />
    </form>
  </body>
</html>
