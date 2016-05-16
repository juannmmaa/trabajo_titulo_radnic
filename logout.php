<?php
session_start();
//Matamos la sesion
session_destroy();
echo 'Ha terminado la session <p><a href="http://localhost/titulo/login.php">index</a></p>';
?>
<SCRIPT LANGUAGE="javascript">
location.href = "login.php";
</SCRIPT>