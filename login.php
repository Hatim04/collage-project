
<?php

   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  .login-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
  }
  .login-container h1 {
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
  .forgot-password {
    margin-top: 10px;
    font-size: 14px;
    color: #3498db;
    text-decoration: none;
  }
  .sign-up {
    margin-top: 10px;
    font-size: 14px;
    color: #3498db;
    text-decoration: none;
  }
  .login-through {
    margin-top: 20px;
  }
  .login-through img {
    width: 30px;
    margin: 0 10px;
    cursor: pointer;
  }
</style>
</head>
<body>

  
<div class="login-container">
  <h1>Login</h1>
  <form action="login1.php" method="post">
  <input type="text" placeholder="Username" name="username">
  <input type="password" placeholder="Password" name="password">
  <button type="submit">Login</button>
  <a href="forgot.php" class="forgot-password">Forgot Password?</a><br>
  <a href="signup.php" class="sign-up">Don't have an account? Sign Up</a>
  <div class="login-through">
    <p>Or login through:</p>
    <button class="btn btn-info btn-login"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg><br></button>
    <button class="btn btn-primary btn-login"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></button>
  </form>
    <!-- <i class="fa-brands fa-google"></i> -->
    <!-- <img src="#" alt="Login with Google"> -->
    
    <!-- <img src="#" alt="Login with Facebook"> -->
  </div>
</div>
</body>
</html>
