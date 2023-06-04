<?php 

session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }

  elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>

  <?php
    include 'student_css.php'
  ?>  

</head>
<body>

  <?php
    include 'student_sidebar.php'
  ?>

  <div class="content">
    <form action="">
      <div>
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email">
      </div>
      <div>
        <label>Phone</label>
        <input type="number" name="phone">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div>
        <input type="submit" name="update_profile">
      </div>
    </form>
  </div>
  
</body>
</html>