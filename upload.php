<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo '<script>window.location.href = "index.php";</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project Submission : DBMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<form action="uploaded.php" method="POST" enctype="multipart/form-data">

    <div class="row">
      <div class="col">
      <label for="names" class="mr-sm-2">Names</label>
      </div>
      <div class="col">
      <label for="ids" class="mr-sm-2">IDs</label>
      </div>
    </div><br>


    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="memb1_name" placeholder="Enter 1st Member Name" name="memb1_name" required>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter 1st Member ID" id="memb1_id" name="memb1_id" required>
      </div> 
    </div><br>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="memb2_name" placeholder="Enter 2nd Member Name" name="memb2_name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter 2nd Member ID" id="memb2_id" name="memb2_id">
      </div>  
    </div><br>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="memb3_name" placeholder="Enter 3rd Member Name" name="memb3_name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter 3rd Member ID" id="memb3_id" name="memb3_id">
      </div>
    </div><br>

    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="memb4_name" placeholder="Enter 4th Member Name" name="memb4_name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Enter 4th Member ID" id="memb4_id" name="memb4_id">
      </div>
    </div><br>

    <div class="row">
        <div class="col">
            <input type="text" style="height:100px; wrap:wrap;" class="form-control" placeholder="Enter Project Description Here" id="projDecription" name="projDecription">
        </div>
    </div><br><br>

    <div class="row">
        <div class="col">
        <p style="color:red;">Only upload .zip file of your project!</p>
        </div>
        <div class="col">
        <input type="file" id="projFile" name="projFile" accept=".zip" required>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="input-box-2 input-box col-4 ">
                <input type="submit" name="upload" value="Upload">
            </div>
        </div>
        <div class="col">
            <div class="input-box-2 input-box col-4 ">
                <a href="logout.php" style="color:crimson;">Logout</a>
            </div>
        </div>
    </div><br><br>

    
</form>
</div>

</body>
</html>
