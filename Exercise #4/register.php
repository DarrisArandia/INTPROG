<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Save into session
    $_SESSION['user'] = [
        'username' => $username,
        'password' => $password
    ];

    // Redirect to success page
    header("Location: success.php?user=$username");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
      width: 320px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      transition: border 0.3s ease;
    }

    input:focus {
      border-color: #1877F2;
      outline: none;
    }

    button {
      background: #1877F2;
      color: #fff;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: 0.3s;
    }

    button:hover {
      background: #145dbf; 
    }

    p {
      margin-top: 15px;
      color: #555;
    }

    a {
      color: #1877F2;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form method="POST" action="register.php">
      <label>Username:</label>
      <input type="text" name="username" required>

      <label>Password:</label>
      <input type="password" name="password" required>

      <button type="submit">Register</button>
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
  </div>
</body>
</html>