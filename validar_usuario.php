<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <?php
if (is_null($_POST["usuario"]) && is_null($_SESSION["id_user"])) {
  session_destroy();
    //header("Location: login.php"); 
  //echo "javascript:alert('password invalida');";
  //echo "javascript:window.location='login.php';";
  exit();
}

 /* <script type="text/javascript">
    alert("password invalida");
</script>*/


//AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
$conex = "host=localhost port=5432 dbname=radnic user=postgres password=titulo";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
 // Puedes utilizar la funcion para eliminar algun caracter en especifico
 //$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
 //$password = $HTTP_POST_VARS["password"];
 // o puedes convertir los a su entidad HTML aplicable con htmlentities
 $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
 $password = $_POST["password"];
 $result = pg_query('SELECT apellido, nombre_cliente FROM cliente WHERE nombre_cliente=\''.$usuario.'\'');
 if($row = pg_fetch_array($result)){
  if($row["apellido"] == $password){
   $_SESSION["k_username"] = $row['nombre_cliente'];
   echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
   echo '<a href="index.php">Index</a></p>';
   //Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
   /*Ingreso exitoso, ahora sera dirigido a la pagina principal.
   <SCRIPT LANGUAGE="javascript">
   location.href = "index.php";
   </SCRIPT>*/
  }else{
   echo 'Password incorrecto';
  }
 }else{
  echo 'Usuario no existente en la base de datos';
 }
 pg_free_result($result);
}else{
 echo 'Debe especificar un usuario y password';

  if(is_null($_SESSION["id_user"])){
  session_destroy();
  //header("Location: login.php"); 
exit();
}
}
pg_close();
?>
</body>
</html>

