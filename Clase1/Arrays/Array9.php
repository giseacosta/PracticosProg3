<?php

$lapicera1 = array(
'color' => 'azul',
'marca' => 'bic',
'trazo' => 'fino',
'precio' => 'dos pesos'
);
echo "Array Asociativo:<br>";
foreach ($lapicera1 as $key=>$value)

 {
	echo "El valor de posicion ".$key." es : ".$value;
	echo "<br>";
}
var_dump($lapicera1);


$lapicera2 = array(
'color' => 'rojo',
'marca' => 'bic',
'trazo' => 'grueso',
'precio' => 'cinco pesos'
);
echo "<br>Array Asociativo:<br>";
foreach ($lapicera2 as $key=>$value)

 {
	echo "El valor de posicion ".$key." es : ".$value;
	echo "<br>";
}
var_dump($lapicera2);



$lapicera3 = array(
'color' => 'verde',
'marca' => 'bic',
'trazo' => 'ancho',
'precio' => 'tres pesos'
);
echo "<br>Array Asociativo:<br>";
foreach ($lapicera3 as $key=>$value)

 {
	echo "El valor de posicion ".$key." es : ".$value;
	echo "<br>";
}
var_dump($lapicera3);



?>