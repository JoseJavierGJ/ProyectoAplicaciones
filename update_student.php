<?php 

session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }

  elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
  }

  $host="localhost";
  $user="root";
  $password="";
  $db="schoolproject";

  $data=mysqli_connect($host, $user, $password, $db);
  $id=$_GET['student_id'];
  $sql="SELECT * FROM user WHERE id='$id' ";
  $result=mysqli_query($data, $sql);
  $info=$result->fetch_assoc();

  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="UPDATE user SET username='$name', email='$email', phone='$phone', password='$password' WHERE id='$id' ";
    $result2=mysqli_query($data, $query);

    if($result2){
      header("location:view_student.php");
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/3a9f7539-9d01-4e36-b27d-254409ac16c9/d9e64l5-e25b4b91-9738-470b-bf7f-b75878a85d34.png/v1/fill/w_16,h_16/16x16_free_pixel_cookie_by_mintiestea_d9e64l5-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYiLCJwYXRoIjoiXC9mXC8zYTlmNzUzOS05ZDAxLTRlMzYtYjI3ZC0yNTQ0MDlhYzE2YzlcL2Q5ZTY0bDUtZTI1YjRiOTEtOTczOC00NzBiLWJmN2YtYjc1ODc4YTg1ZDM0LnBuZyIsIndpZHRoIjoiPD0xNiJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.i7QshEPrKPq9V52UMdtCNgPc491I6lf6elJY4k-0_NI" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <?php
    include 'admin_css.php';
  ?>

  <style type="text/css">
    label{
      display: inline-block;
      width: 100px;
      text-align: right;
      padding-top: 10px;
      padding-bottom: 10px;
      font-family: Poppins;
    }

    .div_deg{
      background-color: #c8dcff;
      width: 400px;
      padding-bottom: 70px;
      padding-top: 70px;
      font-family: Poppins;

    }
  </style>
  
</head>
<body>
  
  <?php
    include 'admin_sidebar.php';
  ?>

  <div class="content">
    <center><br>

      <h1 style="font-family: Poppins;">Update Student</h1>

      <div class="div_deg">
        <form action="#" method="POST">
          <div>
            <label style="font-family: Poppins;">Username</label>
            <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
          </div>
          <div>
            <label style="font-family: Poppins;">Email</label>
            <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
          </div>
          <div>
            <label style="font-family: Poppins;">Phone</label>
            <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
          </div>
          <div>
            <label style="font-family: Poppins;">Password</label>
            <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
          </div>
          <div>
            <input class="btn btn-info" type="submit" name="update" value="Update" style="font-family: Poppins;">
          </div>
        </form>
      </div>
    </center>
  </div>
  
</body>
</html>