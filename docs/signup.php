<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
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

  <form method="post" action="includes/signupinc.php" class="container">
    <h1 style="color: #E2C1A1;">Sign Up</h1>
    <p>Please fill in this form to create an account.</p><br>

    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="uid"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uid" id="uid" required><br>

    <label for="pwd"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required><br>

    <label for="pwdrepeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="pwdrepeat" id="pwdrepeat" required><br>

    <label style="width: fit-content">
      <input type="checkbox" name="tos" id="tos" style="margin-bottom: 15px;" required> By creating an account, you agree to our <a href="tos.php" style="color: #E2C1A1">Terms & Conditions</a>.
    </label><br>
    
    <br>

    <div class="bottom-buttons">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>

    <p>Already have an account? <a href="login.php" style="color: #E2C1A1">Login</a>.</p>

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p style='font-size:25px;color:red;'>Fill in all the fields!</p>";
        }
        elseif ($_GET["error"] == "invaliduid") {
          echo "<p style='font-size:25px;color:red;'>Choose a proper username!</p>";
        }
        elseif ($_GET["error"] == "invalidemail") {
          echo "<p style='font-size:25px;color:red;'>Choose a proper email!</p>";
        }
        elseif ($_GET["error"] == "invalidpasswords") {
          echo "<p style='font-size:25px;color:red;'>Passwords don't match!</p>";
        }
        elseif ($_GET["error"] == "stmtfailed") {
          echo "<p style='font-size:25px;color:red;'>Something went wrong, try again!</p>";
        }
        elseif ($_GET["error"] == "usernametaken") {
          echo "<p style='font-size:25px;color:red;'>Username already taken!</p>";
        }
        elseif ($_GET["error"] == "none") {
          echo "<p style='font-size:25px;color:LightSkyBlue;'>You have signed up!</p>";
        }
      }
    ?>
  </form>

  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 40px;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
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