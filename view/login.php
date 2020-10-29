<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/style.css">
      <script src="../js/code.js"></script>
      <title>Inicio de Sesión</title>
    </head>
    <body>
      <div class="form" style="margin:10%;">
        <h2>Área de administrador</h2>
        <form action="../controller/loginController.php" method="POST" onsubmit="return validacionForm()">
          <div class="container">
          <label for="user"><b>Usuario</b></label>
          <input type="text" id="user" placeholder="Usuario" name="user">

          <label for="passwd"><b>Contraseña</b></label>
          <input type="password" id="passwd" placeholder="Contraseña" name="passwd">  
          
          <input type="submit" id="submit" value="Iniciar sesión">
          <div id="message"></div>

        </form>
    </body>
  </html>

