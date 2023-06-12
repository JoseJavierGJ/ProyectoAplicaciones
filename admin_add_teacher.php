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
  $data=mysqli_connect($host,$user,$password,$db);

  if(isset($_POST['add_teacher'])){
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);
    $sql="INSERT INTO teacher(name,description,image) VALUES('$t_name','$t_description',' $dst_db')";
    $result=mysqli_query($data, $sql);

    if($result){
        header('location:admin_add_teacher.php');
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
  <style type="text/css">
    .div_deg{
        background-color: #c8dcff;
        padding-top: 70px;
        padding-bottom:70px;
        width: 500px;
    }
  </style>

  <?php
    include 'admin_css.php';
  ?>
  
</head>
<body>
  
  <?php
    include 'admin_sidebar.php';
  ?>

  <div class="content">
    <center><br>
        <h1 style="font-family: Poppins;" >Añadir Profesor</h1> <br>
        <div class="div_deg">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div>
            <label style="font-family: Poppins;">Nombre:</label>
            <input type="text" name="name">
        </div>
        <br>
        <div>
            <label style="font-family: Poppins;">Descripción:</label>
            <textarea name="description" ></textarea>
        </div>
        <br>
        <div>
            <label style="font-family: Poppins;">Imágen:</label>
            <input type="file" name="image">
        </div>
        <br>
        <div>
            <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">
        </div>
    </form>
  </div>
    </center>
    
</div>
  
  
</body>
</html>