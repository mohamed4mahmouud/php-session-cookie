<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      text-align: center;
    }

   

    h1,h2 {
      margin-bottom: 20px;
      background-color: #3498db;
      color: #fff;
      padding: 10px;
    }

    form {
      margin-top: 20px;
    }

    input[type="submit"] {
      background-color: #e74c3c;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #c0392b;
    }
  </style>
    <title>Home</title>
  </head>
  <body>
    <?php
    session_start();
    ?>

    <?php
    echo "<h1>Welcome To Home Page</h1>";
    echo "<h2?>Hello {$_SESSION['username']}</h2>";
    if (isset($_POST['logout'])) {
      $_SESSION = array();
      if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 1,
              $params["path"], $params["domain"],
              $params["secure"], $params["httponly"]
          );
      }
  
      session_destroy();
      header('location:login.html');
  }
    ?>

    <form action="home.php" method="post" id="logout">
      <input type="submit" value = "Logout" name="logout">
    </form>
  </body>
</html>
