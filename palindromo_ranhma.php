<?php 



$texto = "mi texto";
$texto = str_replace(' ','',$texto);

$texto2 = strrev($texto);

echo $texto. ' == ' .$texto2;
echo '<br>';
if($texto == $texto2):
    echo 'Si es un palindromo';
else:
        echo 'No es un palindromo';
endif;
