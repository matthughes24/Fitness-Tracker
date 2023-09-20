<!DOCTYPE html>
<html lang="en">
<head>
  <title>Timeline</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <?php
    include_once 'header.php';
    include 'includes/dbhinc.php';

    if (isset($_POST['submit'])) {
    
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $text = $_POST['text'];
  
      $sql = "INSERT INTO posts (name, subject, text) VALUES ('$name', '$subject', '$text')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Post added succesfully!')</script>";
      }
      else {
        echo "<script>alert('Post did not add succesfully.')</script>";
      }
    }

  ?>

  <div class="container">
    <form action="" method="POST" class="form">
    <h1>Create Post</h1>
    <br>
      <div class="row">
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter Name" required>
        </div>
        <div class="input-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
        </div>
      </div>
      <div class="input-group textarea">
        <label for="text">Text</label>
        <textarea name="text" id="text" name="text" style="resize: none; width: 96%;" placeholder="Enter Text" required></textarea>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Submit</button>
      </div>
    </form>
    
    <div class="prev-posts">
    <h1>Timeline</h1>
    <br>
      <?php

      $sql = "SELECT * FROM posts";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0) 
      {
        while($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="single-item">
        <h4><?php echo $row['name']; ?></h4>
        <p><?php echo $row['subject']; ?></p>
        <p><?php echo $row['text']; ?></p>
      </div>
      <?php

        }
      }

      ?>
    </div>
  </div>

  <style>

    * {
      margin: 0; 
      padding: 0; 
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      width: 100%;
      min-height: 100vh;
      margin-top: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: lightgrey;
    }

    .container {
      padding: 20px;
      background: white;
      box-shadow: 0 5px 10px rgba(0,0,0,0.3);
      width: 600px;
      min-height: 400px;
      margin: 20px 0;
    }

    .container .row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .container .form .row .input-group {
      padding: 0 10px;
      display: block;
    }

    .container .form .row .input-group:first-child {
      padding-left: 0;
    }

    .container .form .row .input-group:last-child {
      padding-right: 0;
    }
    
    .container .form .input-group {
      width: 100%;
      height: 50px;
      margin-bottom: 50px;
    }

    .container .form .input-group label {
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
    }

    .container .form .input-group .btn {
      margin: 20px 0;
      display: block;
      padding: .7rem 2rem;
      opacity: .8;
      color: white;
      background: #0177CC;
      border: none;
      outline: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      transition: .3s ease-in;
    }

    .container .form .input-group .btn:hover {
      opacity: 1;
    }

    .container .form .input-group input, .container .form .input-group textarea {
      width: 88%;
      height: 100%;
      border: 1.5px solid black;
      border-radius: 12px;
      outline: none;
      padding: 5px 10px;
    }

    .container .form .input-group.textarea {
      height: 200px;
    }

    .container .form .input-group.textarea textarea {
      resize: none;
      font-family: Arial, Helvetica, sans-serif;
    }

    .container .prev-posts {
      margin-top: 50px;
    }

    .container .prev-posts .single-item {
      background: white;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      padding: 10px 20px;
      text-align: left;
      margin-bottom: 25px;
    }

    .container .prev-posts .single-item h4 {
      font-size: 1.3rem;
      font-weight: 800;
    }

    .container .prev-posts .single-item p {
      font-size: .9rem;
 
    }
  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>