<?php
require "empleado.php";
//require "administracion.php";



echo "<br>Muestro empleado<br>";


$file = fopen("listadodeempleados.txt","r");

 
  while(! feof($file))
  {
    $string = fgets($file);
    $ele=explode(" ; ",$string);


foreach($ele as $element)
{
echo $element."<br/>";
}
  }
    fclose($file);


echo "<br/>MOSTRANDO ARRAY<br/>";
    $array=Fabrica::ArrayEmpleados();

    foreach ($array as $emp) {
             	echo $emp->_toString()."<br/>";
             }

?>