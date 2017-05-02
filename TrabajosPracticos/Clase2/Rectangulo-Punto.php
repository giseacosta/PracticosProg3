<?php

require "clasesRectangulo-Punto.php";

   $unoPunto = new Punto(24, 42);
   $tresPunto = new Punto(14, 30);
   $rect = new Rectangulo($unoPunto, $tresPunto);
   $rect->ToString();;

?>