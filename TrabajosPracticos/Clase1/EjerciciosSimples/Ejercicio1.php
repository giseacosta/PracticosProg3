<?php

$num=0;
$cont=0;

for ($suma= 0; $suma<=1000; $suma++) {
    $num=$num+1;
    echo "Numero: $num <br>";
    $suma=$suma+$num;
  
    $cont++;
} 
 echo "Suma: $suma <br>";
echo "The total is: $cont <br>";

?>