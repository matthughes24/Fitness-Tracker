<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <?php
    include_once 'header.php';
  ?>

  <br>

  <form method="post" class="container">
    <h1 style="color: #E2C1A1;">Contact</h1>
    <p>Please fill in this form to contact us.</p>
    <br>

    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="message"><b>Message</b></label><br>
    <textarea placeholder="Enter Message" name="message" id="message" required></textarea><br>

    <div class="bottom-buttons">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit">Submit</button>
    </div><br>
  </form>
  
  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 40px;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=email] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
      font-size: 16px;
    }

    input[type=email]:focus, textarea:focus {
      background-color: lightgray;
      outline: none;
    }

    textarea { 
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
      height:  150px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
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