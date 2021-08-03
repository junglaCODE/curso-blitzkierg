<?php

#Frase o palabra
// Saca tu butacas

//var_dump($_GET);
var_dump($_POST);
$enum = $_POST['str'];
//$enum = $_GET['str'];

$enum = strtoupper($enum);
$enum = str_replace(' ','',$enum);

$long = strlen($enum);
$midd = floor($long / 2);
$back = $midd;

for($x=$midd; $x < $long; $x++) {

   #echo substr($enum,$x,1);
   #echo substr($enum,$back,1);

   if(substr($enum,$x,1) == substr($enum,$back,1)) {
        $resultado = "SI";
        $back = $back - 1;
   }
   else {
        $resultado = "NO";
        $x = $long;
   }
   
}  

echo $resultado." es Palindro"

?>