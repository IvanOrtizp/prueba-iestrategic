<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <title>Formulario de contacto</title>
    <style>
      body{
        font-family:Arial;
      }
      
    </style>
  </head>

  <body>
    <a href="index.php">Inicio</a>
    <h1 id="title">Formulario de contacto</h1>
    <form method="post" class="form" id="form">
      <div>
        <label for="nombre" class="form__label">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
      </div></br>
      <div>
        <label for="apellidos" class="form__label">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos">
      </div></br>
      <div>
        <label for="telefono" class="form__label">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">
      </div></br>
      <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
      </div></br>
      <div>
        <label for="comentarios" class="form__label">Comentarios:</label>
        <textarea type="text" id="comentarios" name="comentarios"></textarea>
      </div></br>
      
      <div>
        <label for="terms">He leído y acepto el aviso legal</label>
        <input type="checkbox" name="terms" id="terms">
      </div></br></br>
      <button id="submitButton" disabled>Send</button>
    </form>
    <script src="script.js"></script>
  </body>

</html>