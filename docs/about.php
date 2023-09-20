<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <!--navbar section-->
  <?php
    include_once 'header.php';
  ?>

  <div class="about-section">
    <h1>About Us Page</h1>
    <p>Fitness Tracker helps you stay motivated and improve your health by tracking your activity, exercise, food, and water intake.</p>
    <p>Our trainers will support you to meet your goals in no time!</p>
  </div>

  <h2 style="text-align:center">Our Trainers</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="img/istockphoto-856797530-612x612.jpg" alt="Ashley" style="width:100%">
        <div class="container">
          <h2>Ashley</h2>
          <p>Ashley is an undergraduate student at Georgetown University. 
            She became a National Academy of Sports Medicine (NASM) Certified Personal Trainer in 2019, and is currently working toward a specialization in corrective exercise. 
            A lifelong dancer, Ashley believes wholeheartedly that movement is a necessary component of physical and mental wellness and personal expression.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="img/istockphoto-1072395722-612x612.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Mike</h2>
          <p>Mike is a Certified Strength and Condition Specialist with the National Strength and Conditioning Association. He has an extensive background from training professional and amateur athletes to working with professionals in fitness. Mike approaches fitness as a life long behavior modification where we have continuous improvement. He defines his sessions efficient with an emphasis on proper form.</p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="img/istockphoto-675179390-612x612.jpg" alt="James" style="width:100%">
        <div class="container">
          <h2>James</h2>
          <p>James holds a BS in Physical Education as well as a MS in Exercise Science and Health Promotion. He is a Certified Strength and Conditioning Specialist (CSCS). He has a background in health and fitness as well as athletic performance training with over 20 years of certification and experience in the field. His passion for fitness began through his love of sports and developed as a varsity athlete in basketball.</p>
        </div>
      </div>
    </div>
  </div>

  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 40px;}

    .column {
      float: left;
      width: 32%;
      margin-bottom: 16px;
      padding: 0 10px;
    }

    .row {margin-left: 40px;}

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      text-align: center;
      background-color: lightgrey;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #E2C1A1;
      color: black;
    }
 
  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>