<?php

session_start();
#var_dump($_POST);

var_dump($_SESSION);


$v1=$_POST['nombre'];
$v2=$_POST['correo'];
$v3=$_POST['pass'];
$v4=$_POST['fecha'];
$v5=$_POST['estado'];



array_push($_SESSION, $v1, $v2, $v3, $v4, $v5);

var_dump($_SESSION);



#echo "<script type='text/javascript'>";

#echo "window.history.back(-1)";

#echo "</script>";