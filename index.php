<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>iRacing Estadísticas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header>
  <h1 id="inicio">iRacing Estadísticas</h1>
  </header>
  <section>
    <article>
      <form action="login.php" method="post" class="formLogin">
      	<div class="container login">
          	<h1>Iniciar sesión</h1>
            <hr>
            <label><b>User</b></label>
            <input type="text" placeholder="Ingrese su usuario" name="user" required>
            <label for=""><b>Password</b></label>
            <input  type="password" placeholder="Ingrese su password" name="clave" required>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Recordar usuario
            </label>
            <button type="submit" class="registerbtn">Ingresar</button>
    	</div>
      </form>
    </article>
  </section>

</body>
</html>
