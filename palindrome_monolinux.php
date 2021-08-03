<?php 
/**
 *  Algoritmo para el curso de php blitzkberg bop
 *  @date : 12-mar/2020
 *  @author : jlgc/monolinux
 */

$cadena  = "anita lava la tina"; /*cadena que vamos a comparar*/
$cadena = str_replace(' ','',$cadena);/*quita los string*/ 

$aux_cadena = "";
/*for ($i=strlen($cadena); $i >= 0; $i--) { 
     $aux_cadena.=$cadena[$i];
 }*/

/*$aux_cadena =  implode(/*lo conviertes en string*/
//        array_reverse(/*lo inviertes*/
//            str_split($cadena) /*array funcional*/ 
     //   )
//);*/

$aux_cadena = strrev($cadena);

echo $cadena. '==' . $aux_cadena;
echo '<br>';
if($cadena == $aux_cadena):
    echo 'Es una cadena palindrome';
else:
    echo 'No es una cadena palindrome';
endif;