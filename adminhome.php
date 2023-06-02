<?php 

session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }

  elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" type="text/css" href="admin.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <header class="header">
    <a href="" class="aa">Admin Dashboard</a>
    <div class="logout">
      <a href="index.php" class="btn btn-info">Logout</a>
    </div>
  </header>
  <aside>
    <ul>
      <li>
        <a href=""">Admission</a>
      </li>
      <li>
        <a href="">Add Student</a>
      </li>
      <li>
        <a href="">View Student</a>
      </li>
      <li>
        <a href="">Add Teacher</a>
      </li>
      <li>
        <a href="">View Teacher</a>
      </li>
      <li>
        <a href="">Add Courses</a>
      </li>
      <li>
        <a href="">View Courses</a>
      </li>
    </ul>
  </aside>

  <div class="content">
    <h1>Siderbar Accordion</h1>
    <p>Hola Mundo</p>
    <input type="text" name="">
  </div>
  
</body>
</html>