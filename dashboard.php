<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // redirect if not logged in
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url("images/bg1.jpg") no-repeat center center fixed;
      background-size: cover;
    }
    .dashboard {
      background: #15819c;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      text-align: center;
      width: 400px;
      color: #fff;
    }
    h1 {
      margin-bottom: 20px;
      color: #fff;
    }
    p {
      margin-bottom: 30px;
      font-size: 16px;
    }
    a {
      display: inline-block;
      padding: 12px 30px;
      background: #f84c74;
      color: #fff;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    a:hover {
      background: #d83a61;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
    <p>You are now logged in successfully 🎉</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
