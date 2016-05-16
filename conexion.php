<html>
    <head><title>Prueba</title></head>
    <body>
<?php
   /*$host="localhost";
    $port="5432";
    $user="titulo";
    $pass="titulo";
    $dbname="radnic";

    $connect = pg_connect("host=$host, port=$port, user=$user, password=$pass, dbname=$dbname");

    if(!$connect)
        echo "<p><i>No me conecte</i></p>";
    else
        echo "<p><i>Me conecte</i></p>";

    pg_close($connect);*/



    $host= 'localhost';
    $port= 5432;
    $db = 'radnic';
    $user='postgres';
    $pass='titulo';

    $cadena = "host='$host' port='$port' dbname='$db' user='$user' password='$pass'";
    $con = pg_connect($cadena) or die ("error de conexion. ". pg_last_error());
    echo "Conexion exitosa <br/> Ahora realizaremos una consulta a la bdd.";


    echo '<br /> Resultado de la consulta:';
    $result = pg_query($con,"SELECT * FROM cliente;");
    echo '<table>
    		<tr style="font-weight: bold; color: blue;"">
    			<td style="width: 100px;">Carne</td>
    			<td style="width: 250px;">Nombre</td>
    			<td>Carrera</td>
    		</tr>';

    while ($fila = pg_fetch_array($result)){
    	echo '<tr><td>'.$fila['id_cliente'].'</td><td>'
    	.$fila['rut'].'</td><td>'.$fila['nombre_cliente'].'</td></tr>';
    }


?>
    </body>
</html>