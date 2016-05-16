
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HTML Document Structure
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form action="validar_usuario.php" method="post">
  <h1>Acceso Administradores</h1>
  <div class="inset">
  <p>
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" size="20" maxlength="20" />
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" size="10" maxlength="10" />
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember"> <!--dar funcionalidad -->
    <label for="remember">Remember me for 14 days</label> <!--dar funcionalidad -->
  </p>
  </div>
  <p class="p-container">
    <span>Forgot password ?</span>
    <input type="submit" value="Ingresar" />
  </p>
</form>

</body>
</html>




<!--

URL del artículo: http://www.ejemplode.com/17-html/94-ejemplo_de_comentario_en_html.html
Fuente: Comentario en HTML
/*
<form action="validar_usuario.php" method="post">
Usuario:<input type="text" name="usuario" size="20" maxlength="20" />
<br />
Password:<input type="password" name="password" size="10" maxlength="10" />
<br />
<input type="submit" value="Ingresar" />
</form>
*/ -->