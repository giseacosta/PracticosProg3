<?php
$mes=date("m");
$estacion;
 
date_default_timezone_set("America/Argentina/Buenos_Aires");
echo "Fecha de hoy " . date("d/m/Y") . "<br>";
echo "Fecha de hoy " . date("Y/m/d"). "<br>";
echo "Fecha de hoy " . date("y - m - d")."<br>";
echo "Fecha de hoy " . date("d.m.Y") . "<br>";
$hoy = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
echo $hoy. "<br>";
$hoy = date("j, n, Y"); // 10, 3, 2001
echo $hoy. "<br>";
$hoy = date("Ymd"); // 20010310
echo $hoy. "<br>";
$hoy = date("D M j G:i:s T Y"); // Sat Mar 10 15:16:08 MST 2001
echo $hoy. "<br>";
$hoy = date("H:i:s"); // 17:16:17
echo $hoy. "<br>";





$dia = date('z');


if ( $dia < 79 ) {
        $estacion = 'verano';

    echo ("Estacion del año: VERANO");
   
    } elseif ( $dia < 172 ) {
        $estacion = 'otoño';
  echo ("Estacion del año:  OTOÑO");
  
    } elseif ( $dia < 265 ) {
        $estacion = 'invierno';
  echo ("Estacion del año:  INVIERNO");
 
    } elseif ( $dia < 352 ) {
        $estacion = 'primavera';
  echo ("Estacion del año:  PRIMAVERA");
  
    } else {
        $estacion = 'verano';
         echo ("Estacion del año:  VERANO");
 
    }


?>