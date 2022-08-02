<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <center><img src="https://carloscueto.edu.pe/imagenes/logo1.png" alt="logo" width="150">
      <header>Iniciar Sesión</header></center>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo electronico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ingresar">
        </div>
      </form>
      <div class="link">¿No tienes una cuenta? <a href="index.php">Registrate</a></div>
      
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
