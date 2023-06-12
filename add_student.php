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

  if(isset($_POST['add_student']))
  {
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="student";

    # Para checar que no se repitan usernames 
    $check="SELECT * FROM user WHERE username='$username' ";
    $check_user=mysqli_query($data, $check);
    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){
        echo " <script type='text/javascript'> 
            alert('Username Already Exists. Try Another One'); </script>";
    } else {

        $sql="INSERT INTO user(username, email, phone, usertype, password) 
        VALUES ('$username', '$user_email', '$user_phone', '$usertype', '$user_password')";

        $result=mysqli_query($data, $sql);

        if($result)
        {
            echo " <script type='text/javascript'> 
            alert('Data Upload Success'); </script>";
        }
        else 
        {
            echo "Upload Failed";
        }
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
    label
    {
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .div_deg
    {
        background-color: #CDF7F6;
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px; 
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
    <h1 style="font-family: Poppins;" >Añadir Estudiante</h1>
    <div class="div_deg">
        <form action="#" method="POST">
            <div>
                <label style="font-family: Poppins;" >Usuario</label>
                <input type="text" name="name">
            </div>
            <div>
                <label style="font-family: Poppins;" >Correo</label>
                <input type="text" name="email">
            </div>
            <div>
                <label style="font-family: Poppins;" >Teléfono</label>
                <input type="number" name="phone">
            </div>
            <div>
                <label style="font-family: Poppins;" >Contraseña</label>
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" name="add_student" value="Add Student" style="font-family: Poppins;" >
            </div>
        </form>
    </div>
    </center>
  </div>
  
</body>
</html>