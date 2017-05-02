

<?php
function basico($numero) {
$valor = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho',
'nueve','diez','once','doce','trece','catorce','quince','dieciseis','diecisiete','dieciocho','diecinueve','Veinte','Veintiuno','Veintidos','Veintitres', 'Veinticuatro','Veinticinco','Veintiséis','Veintisiete','Veintiocho','Veintinueve');
return $valor[$numero - 1];
}
 
function decenas($n) {
$decenas = array (30=>'Treinta',40=>'Cuarenta',50=>'Cincuenta',60=>'Sesenta');
if( $n <= 29) return basico($n);
$x = $n % 10;
if ( $x == 0 ) {
return $decenas[$n];
} else return $decenas[$n - $x].' y '. basico($x);
}
 

 

function convertir($n) {
switch (true) {
case ( $n >= 20 && $n <= 29) : return basico($n); break;
case ( $n >= 30 && $n <= 60) : return decenas($n); break;
}
}
 $num=57;
 $letra=convertir($num);

echo ("Numero:".$num."<br>"); 
echo ("Numero En Letra:".$letra); 

?>









