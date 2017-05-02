<?php

$a=6;
$b=9;
$c=8;

echo("EJEMPLO 1:<br>");
echo ("A:".$a."<br>");
echo ("B:".$b."<br>");
echo ("C:".$c."<br>");
$medio;


if ((($a < $b ) && ($c < $a) )or(($a > $b ) && ($c > $a))) 
 {
   $medio=$a;
   echo ("Numero Medio:".$medio."<br>");
 } 
elseif (($b < $a) && ($c < $b) or (($b > $a) && ($c > $b) ))
{
	$medio=$b;
echo ("Numero Medio:".$medio."<br>");

} 
else

{
 $medio=$c;
 if(($medio==$a) or ($medio==$b) or($a == $b)) {
echo ("No hay valor medio");
}
	else
	{
	$medio=$c;
echo ("Numero Medio:".$medio."<br>");

}
}




$a=5;
$b=1;
$c=5;
echo("EJEMPLO 2:<br>");

echo ("A:".$a."<br>");
echo ("B:".$b."<br>");
echo ("C:".$c."<br>");
$medio;


if ((($a < $b ) && ($c < $a) )or(($a > $b ) && ($c > $a))) 
 {
   $medio=$a;
   echo ("Numero Medio:".$medio."<br>");
 } 
elseif (($b < $a) && ($c < $b) or (($b > $a) && ($c > $b) ))
{
	$medio=$b;
echo ("Numero Medio:".$medio."<br>");

} 
else

{
 $medio=$c;
 if(($medio==$a) or ($medio==$b) or($a == $b)) {
echo ("No hay valor medio");
}
	else
	{
	$medio=$c;
echo ("Numero Medio:".$medio."<br>");

}
}




?>