<?php



require "clasesFiguraGeometrica.php";

    $rectangulo = new Rectangulo(4,5);
    $rectangulo->_setColor('Verde');
 
    echo $rectangulo->ToString();;

   $triangulo = new Triangulo(7,6);
   $triangulo->_setColor('Azul');
    echo $triangulo->ToString();;
   





?>
