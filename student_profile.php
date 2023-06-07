<?php 

session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }

  elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
  }

  $host="localhost";
  $user="root";
  $password="";
  $db="schoolproject";

  $data=mysqli_connect($host, $user, $password, $db);
  $name=$_SESSION['usertype'];
  $sql="SELECT * FROM user WHERE username='$name' ";
  $result=mysqli_query($data, $sql);
  $info=mysqli_fetch_assoc($result);

  if(isset($_POST['update_profile'])){
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="UPDATE user SET email='$s_email', phone='$s_phone', password='$s_password' WHERE username='$name' ";
    $result2=mysqli_query($data, $sql2);

    if($result2){
      header('location:student_profile.php');
    }

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/3a9f7539-9d01-4e36-b27d-254409ac16c9/d9e64l5-e25b4b91-9738-470b-bf7f-b75878a85d34.png/v1/fill/w_16,h_16/16x16_free_pixel_cookie_by_mintiestea_d9e64l5-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYiLCJwYXRoIjoiXC9mXC8zYTlmNzUzOS05ZDAxLTRlMzYtYjI3ZC0yNTQ0MDlhYzE2YzlcL2Q5ZTY0bDUtZTI1YjRiOTEtOTczOC00NzBiLWJmN2YtYjc1ODc4YTg1ZDM0LnBuZyIsIndpZHRoIjoiPD0xNiJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.i7QshEPrKPq9V52UMdtCNgPc491I6lf6elJY4k-0_NI" type="image/png">

  <?php
    include 'student_css.php'
  ?>  

  <style type="text/css" >
    label{
      display: inline-block;
      text-align: right;
      width: 100px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .div_deg{
      background-color: #CDF7F6;
      width: 500px;
      padding-top: 70px;
      padding-bottom: 70px;
    }
  </style>

</head>
<body>

  <?php
    include 'student_sidebar.php'
  ?>

  <div class="content">
    <center><br>

      <h1>Update Profile</h1>
      <br><br>

      <form action="#" method="POST">
        <div class="div_deg">
          <div>
            <!-- <label>Name</label>
            <input type="text" name="name" value="<?php echo "{$info['username']}" ?>">
          </div> -->
          <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo "{$info['email']}" ?>">
          </div>
          <div>
            <label>Phone</label>
            <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
          </div>
          <div>
            <label>Password</label>
            <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
          </div>
          <div>
            <input type="submit" class="btn btn-info" name="update_profile" value="Update">
          </div>
        </div>
      </form>
    </center>
  </div>
  
</body>
</html>