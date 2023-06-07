<?php
  error_reporting(0);
  session_start();
  session_destroy();

  if($_SESSION['message'])
  {
    $message=$_SESSION['message'];

    echo"<script type='text/javascript'>

    alert('$message');

    </script>";
  }
  $host="localhost";
  $user="root";
  $password="";
  $db="schoolproject";

  $data=mysqli_connect($host,$user,$password,$db);
  $sql="SELECT * FROM teacher";
  $result=mysqli_query($data,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T-School</title>
  <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/3a9f7539-9d01-4e36-b27d-254409ac16c9/d9e64l5-e25b4b91-9738-470b-bf7f-b75878a85d34.png/v1/fill/w_16,h_16/16x16_free_pixel_cookie_by_mintiestea_d9e64l5-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYiLCJwYXRoIjoiXC9mXC8zYTlmNzUzOS05ZDAxLTRlMzYtYjI3ZC0yNTQ0MDlhYzE2YzlcL2Q5ZTY0bDUtZTI1YjRiOTEtOTczOC00NzBiLWJmN2YtYjc1ODc4YTg1ZDM0LnBuZyIsIndpZHRoIjoiPD0xNiJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.i7QshEPrKPq9V52UMdtCNgPc491I6lf6elJY4k-0_NI" type="image/png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <label class="logo">T-School</label>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Admission</a></li>
      <li><a href="login.php" class="btn btn-info" >Login</a></li>
    </ul>
  </nav>
    <div class="section1">
      <label class="img_text">We Touch Students With Care ♥</label>
      <img class="main_img" src="./img/rose.jpg">
    </div>
   <div class="container">
      <div class="row">
        <div class="col-md-4">

          <img class ="welcome_img" src="./img/school-chido.jpg" >

        </div>

        <div class="col-md-8">
          <h1>Welcome to T-School</h1>
          <p style="text-align: justify;">
          Descubre en la Universidad del Conocimiento Creativo una página 
          web educativa que te brinda soporte y orientación durante tu viaje 
          de aprendizaje. Sumérgete en un mundo de tutoriales interactivos, 
          guías especializadas y preguntas frecuentes que despejarán tus dudas. 
          Además, encontrarás recursos adicionales y servicios personalizados, 
          como tutorías en línea y asesoramiento académico, para impulsar tu éxito. 
          Nuestra plataforma se convierte en tu compañera fiel, guiándote hacia tus 
          metas académicas. Explora un entorno enriquecedor, donde cada clic te acerca 
          más a la excelencia educativa. En la Universidad del Conocimiento Creativo, 
          estamos comprometidos a brindarte el apoyo necesario para alcanzar tus sueños 
          y desarrollar todo tu potencial. ¡Únete a nosotros y desbloquea tu camino hacia 
          el conocimiento!          
          </p>

        </div>


      </div>
    </div>
    <center>
      <h1>Our Teachers</h1>
    </center>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <img class="teacher" src="./img/teacher1.jpg">
            <p style="text-align: justify; width: 90%;">
              Conoce al Profesor Chimpansky, el mono más listo y divertido de la universidad. 
              Con su doctorado en Algebra Lineal y una cola llena de ecuaciones, hace que las 
              matemáticas sean una aventura llena de risas. ¡Prepárate para aprender y reír con 
              este genio del álgebra con piel de primate!
            </p>
        </div>
        <div class="col-md-4">
             <img class="teacher" src="./img/teacher2.jpg">
             <p style="text-align: justify; width: 90%;">
              ¡Conoce al Profesor Perrito, el perro más coqueto y con un doctorado en Base 
              de Datos de toda la universidad! Este maestro de las matemáticas te enseñará 
              de una forma perr-fectamente graciosa. Prepárate para aprender y reír con este 
              adorable canino de conocimientos caninos.
             </p>
        </div>
        <div class="col-md-4">
             <img class="teacher" src="./img/teacher3.jpg">
             <p style="text-align: justify; width: 90%;">
              Conoce al enigmático Profesor Capibromas, el experto en programación de la 
              universidad. Con un doctorado en desarrollo backend y frontend, desvela los 
              secretos de la codificación en misteriosas clases. Prepárate para adentrarte 
              en su mundo y descubrir el fascinante arte de la programación.
             </p>
        </div>
      </div>


   <!-- </div>
    <center>
      <h1>Our Teachers</h1>
    </center>
    <div class="container">
      <div class="row">
        ?php
        while($info=$result->fetch_assoc())
        {
        ?>
        <div class="col-md-4">
            <img class="teacher" src="<php echo "{$info['image']}"?>">
            <h3>?php echo "{$info['name']}"?></h3>
            <h5>?php echo "{$info['description']}"?></h5>
        </div>
        ?php

        }
        
        
        ?>
      </div>
    </div> -->
    <center>
      <h1>Our Courses</h1>
    </center>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
            <img class="teacher" src="./img/web.jpg">
            <h3 style="padding-left: 80px">Backend/Frontend</h3>
            
        </div>
        <div class="col-md-4">
             <img class="teacher" src="./img/graphics.jpg">
             <h3 style="padding-left: 45px">Computer Graphics</h3>
             
        </div>
        <div class="col-md-4">
             <img class="teacher" src="./img/database.png">
             <h3 style="padding-left: 120px">Databases</h3>
             
        </div>
      </div>
    </div>
    <center>
      <h1 class ="adm" style="padding-left: 100px"">Admission Form</h1>
    </center>
    <div align="center" class="admission_form">

      <form action="data_check.php" method="POST">
        <div class="adm_int">
          <label class="label-text">Name</label>
          <input class="input_Deg" type="text" name="name">
        </div>

        <div class="adm_int">
          <label class="label-text">Email</label>
          <input class="input_Deg" type="text" name="email">
        </div>
        <div class="adm_int">
          <label class="label-text">Phone</label>
          <input class="input_Deg" type="text" name="phone">
        </div>
        <div class="adm_int">
          <label class="label-text">Message</label>
          <textarea class="input_txt" name="message"></textarea>
        </div>
        <div class="adm_int">
          <input class="btn btn-primary" type="submit" value="apply" id="submit" value="apply" name="apply">
        </div>
        <footer>
          <h3 class="footer_text">All @copyright reserved by Yojada®</h3>
        </footer>
      </form>
    </div>
</body>
</html>