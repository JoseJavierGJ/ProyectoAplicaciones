<?php

session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
  header("location:login.php");
} elseif ($_SESSION['usertype'] == 'student') {
  header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);
$sql = "SELECT * FROM course";
$result = mysqli_query($data, $sql);

if (isset($_GET['course_id'])) {
  $c_id = $_GET['course_id'];
  $sql2 = "DELETE FROM course WHERE id='$c_id' ";
  $result2 = mysqli_query($data, $sql2);

  if ($result2) {
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
    .table_th {
      padding: 20px;
      font-size: 20px;
      font-family:Poppins;
    }

    .table_td {
      padding: 20px;
      background-color: #c8dcff;
      font-family:Poppins;
    }
  </style>

</head>

<body>

  <?php
  include 'admin_sidebar.php';
  ?>

  <div class="content">
    <center><br>
      <h1>Ver información de los cursos</h1>
      <table border="1px">
        <tr>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Materia</th>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Descripción</th>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Imagen</th>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Borrar</th>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Actualizar</th>
          <th class="table_th" style="text-align: center; font-family:Poppins;">Asignar</th>
        </tr>
        <?php
        while ($info = $result->fetch_assoc()) {

        ?>

          <tr>
            <td class="table_td" style="text-align: center; font-family:Poppins;">
              <?php echo "{$info['name']}" ?>
            </td>
            <td class="table_td" style="text-align: justify; width:350px; font-family:Poppins;">
              <?php echo "{$info['description']}" ?>
            </td>
            <td class="table_td">
              <img height="100px" width="120px" src=" <?php echo "{$info['image']}" ?>">
            </td>
            <td class="table_td">
              <?php
              echo "
              <a onClick=\"javascript:return confirm('¿Estas seguro que quieres eliminar estex curso?');\" class='btn btn-danger' href='admin_view_course.php?course_id={$info['id']}'>Delete</a>"
              ?>
            </td>
            <td class="table_td" style="text-align: center;">
              <?php
              echo "
              <a href='admin_update_course.php?course_id={$info['id']}' class='btn btn-info'>Update</a>";
              ?>
            </td>
            <td class="table_td">
              <?php
              echo "
              <a href='assign_student.php?course_id={$info['id']}' class='btn btn-primary'>Asignar estudiante</a>";
              ?>
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
