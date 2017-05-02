<?php

require "funciones.php";

$num;

for($num=1;$num<=4;$num++)
{
	echo "Potencia de".$num.":<br>";
    $resultado=Potencia($num,2);
    echo $resultado."<br>";
	$resultado=Potencia($num,3);
	 echo $resultado."<br>";
	$resultado=Potencia($num,4);
	 echo $resultado."<br>";
	$resultado=Potencia($num,5);
	 echo $resultado."<br>";
}


?>