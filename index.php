<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <center><img src="https://carloscueto.edu.pe/imagenes/logo1.png" alt="cueto" width="150">
      <header>Registrar</header></center>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre</label>
            <input type="text" name="fname" placeholder="Nombre" required maxlength="15">
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="lname" placeholder="Apellido" required maxlength="17">
          </div>
        </div>
        <div class="field input">
          <label>Correo Electronico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccionar Imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrar e Ingresar">
        </div>
      </form>
      <div class="link">¿Ya tienes una cuenta? <a href="login.php">Ingresar</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
