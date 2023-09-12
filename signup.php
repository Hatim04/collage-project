
<?php

   session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Sign Up Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #e0f2e9;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .signup-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
  }
  .signup-container h1 {
    color: #27ae60;
  }
  input {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  button {
    width: 100%;
    padding: 10px;
    background-color: #27ae60;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
  }
  .login-link {
    margin-top: 10px;
    font-size: 14px;
    color: #3498db;
    text-decoration: none;
  }
</style>
</head>
<body>
<div class="signup-container">
  <form action="signup1.php" method="post">
  <h1>Sign Up</h1>
  <input type="text" placeholder="Name" name="name">
  <input type="email" placeholder="Email" name="email">
  <input type="tel" placeholder="Phone Number" name="number">
  <input type="text" placeholder="City" name="city">
  <input type="text" placeholder="Username" name="username">
  <input type="password" placeholder="Password" name="password">
  <button type="submit">Sign Up</button>
  <a href="login.php" class="login-link">Already have an account? Login</a>
</form>
</div>
</body>
</html>
