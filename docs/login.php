<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <!--navbar section-->
  <?php
    include_once 'header.php';
  ?>

  <br>

  <form method="post" action="includes/logininc.php" class="container">
    <h1 style="color: #E2C1A1;">Login</h1>
    <p>Please fill in this form to login.</p><br>

    <label for="uid"><b>Username or Email</b></label><br>
    <input type="text" placeholder="Enter Username or Email" name="uid" id="uid" required><br>

    <label for="pwd"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required><br>

    <div class="bottom-buttons">
      <button type="reset">Cancel</button>
      <button type="submit" name="submit">Login</button>
    </div>

    <p>Don't have an account? <a href="signup.php" style="color: #E2C1A1">Sign Up</a>.</p>

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p style='font-size:25px;color:red;'>Fill in all the fields!</p>";
        }
        elseif ($_GET["error"] == "wronglogin") {
          echo "<p style='font-size:25px;color:red;'>Incorrect login!</p>";
        }
        elseif ($_GET["error"] == "none") {
          header("Location: login.php");
          exit();
        }
      }
    ?>
  </form>

  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 40px;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
    }

    input[type=text]:focus, input[type=password]:focus {
      background-color: lightgray;
      outline: none;
    }

    /* Set a style for all buttons */
    button {  
      background-color: white;
      color: black;
      font-size: 20px;
      font-weight: 550;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      width: fit-content;
      padding: 12px;
      margin: 0 10px;
      display: inline-block;
    }

    .bottom-buttons {
      text-align: center;
    }
  
    .container {
      text-align: center;
      background-color: #0177CC;
      color: white;
      border-radius: 30px;
      width: 600px;
      margin: auto;
      margin-top: 60px;
      margin-bottom: 60px;
      padding: 10px;
    }

    .container label {
      display: inline-block; 
      width: 50%; 
      text-align: left;
    }
  </style>

  <?php
    include_once 'footer.php';
  ?>
  
</body>
</html>