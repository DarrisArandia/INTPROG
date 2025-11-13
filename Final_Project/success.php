<?php
$username = isset($_GET['user']) ? htmlspecialchars($_GET['user']) : 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url(https://uploads.onecompiler.io/43tbssb7q/43wpmsuv9/IMG_5535.jpeg) no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 15px rgba(0,0,0,0.3);
      width: 340px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    p {
      font-size: 16px;
      color: #444;
      margin: 10px 0;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background: #1877F2;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s;
    }

    a:hover {
      background: #145dbf;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Successful!</h2>
    <p><strong>Username:</strong> <?php echo $username; ?></p>
    <a href="FinalProject.php">Go to Team Page</a>
  </div>
</body>
</html>
