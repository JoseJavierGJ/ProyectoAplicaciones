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

  $data=mysqli_connect($host,$user,$password,$db);
  $sql="SELECT * FROM student_results";
  $result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/3a9f7539-9d01-4e36-b27d-254409ac16c9/d9e64l5-e25b4b91-9738-470b-bf7f-b75878a85d34.png/v1/fill/w_16,h_16/16x16_free_pixel_cookie_by_mintiestea_d9e64l5-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYiLCJwYXRoIjoiXC9mXC8zYTlmNzUzOS05ZDAxLTRlMzYtYjI3ZC0yNTQ0MDlhYzE2YzlcL2Q5ZTY0bDUtZTI1YjRiOTEtOTczOC00NzBiLWJmN2YtYjc1ODc4YTg1ZDM0LnBuZyIsIndpZHRoIjoiPD0xNiJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.i7QshEPrKPq9V52UMdtCNgPc491I6lf6elJY4k-0_NI" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <?php
    include 'student_css.php'
  ?>  

  <style type="text/css">
    .table_th{
        padding:20px;
        font-size: 20px;
        font-family: Poppins;
    }
    .table_td{
        padding: 20px;
        background-color:#c8dcff;
        font-family: Poppins;
    }
  </style>

</head>
<body>

  <?php
    include 'student_sidebar.php'
  ?>

<div class="content">
    <center><br>
    <h1>Calificaciones</h1>
    <table border="1px">
        <tr>
          <th class="table_th" style="text-align: center; font-family: Poppins;">Materia</th>
          <th class="table_th" style="text-align: center; font-family: Poppins;">Calificación</th>
        </tr>
        <?php
        while($info=$result->fetch_assoc()){
        
        ?>

        <tr>
            <td class="table_td" style="text-align: center; font-family: Poppins;">
              <?php echo "{$info['name']}"?>
            </td>
            <td class="table_td" style="text-align: center font-family: Poppins;">
              <?php echo "{$info['grade']}"?>
            </td>
        </tr>

        <?php
        
        }
        
        ?>

    </table>
    </center>
  </div>
  
</body>
</html>