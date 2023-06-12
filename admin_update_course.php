<?php 

session_start();
error_reporting(0);

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
  
  if($_GET['course_id']){
    $c_id=$_GET['course_id'];
    $sql="SELECT * FROM course WHERE id='$c_id' ";
    $result=mysqli_query($data, $sql);
    $info=$result->fetch_assoc();
  }

  if(isset($_POST['update_course'])){
    $id=$_POST['id'];
    $t_name=$_POST['name'];
    $t_des=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    if($file){
      $sql2="UPDATE course SET name='$t_name', description='$t_des', image='$dst_db' WHERE id='$id' ";
      $result2=mysqli_query($data, $sql2);
    }else{
      $sql2="UPDATE course SET name='$t_name', description='$t_des' WHERE id='$id' ";
      $result2=mysqli_query($data, $sql2);
    }

    if($result2){
      header('location:admin_view_course.php');
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
      width: 150px;
      text-align: right;
      padding-top: 10px;
      padding-bottom: 10px;
      font-family: "Poppins", serif;

    }

    .form_deg{
      background-color: #CDF7F6;
      width: 600px;
      padding-top: 70px;
      padding-bottom: 70px;
    }
  </style>
  
</head>
<body>
  
  <?php
    include 'admin_sidebar.php';
  ?>

  <div class="content">
    <center><br>
      <h1 style="font-family:Poppins;">Update Course Data</h1>
      <form class="form_deg" action="admin_update_course.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>
        <div>
          <label style="font-family:Poppins;" >Course Name</label>
          <input type="text" name="name" value="<?php echo "{$info['name']}" ?>"> 
        </div>
        <div>
          <label style="font-family:Poppins;" >About Course</label>
          <textarea name="description" rows="4"><?php echo "{$info['description']}" ?></textarea>
        </div>
        <div>
          <label style="font-family:Poppins;"> Course Old Image</label>
          <img width="100px" height="100px" src="<?php echo "{$info['image']}" ?>">
        </div>
        <div>
          <label style="font-family:Poppins;"> Choose Course New Image</label>
          <input type="file" name="image"> 
        </div>
        <div>
          <input type="submit" name="update_course" class="btn btn-info" value="Update"> 
        </div>
      </form>
    </center>
  </div>
  
</body>
</html>