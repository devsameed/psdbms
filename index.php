<?php
session_start(); // Add this line to start the session
if(isset($_SESSION['username'])){
header("Location: upload.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Project Submission : DBMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="login.php" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Provided Username" name="username" id="username" required >
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Provided Password" name="password" id="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="login" value="Login">
        </div>
      </form>
    </div>
  </body>
</html>