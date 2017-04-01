<?php
$lapiceras = array ( "lapicera1"=> array(
'color' => 'azul',
'marca' => 'bic',
'trazo' => 'fino',
'precio' => 'dos pesos'
),
                $lapicera2 = array(
'color' => 'rojo',
'marca' => 'bic',
'trazo' => 'grueso',
'precio' => 'cinco pesos'
),
                  $lapicera3 = array(
'color' => 'verde',
'marca' => 'bic',
'trazo' => 'ancho',
'precio' => 'tres pesos'
)
                );


echo "Recorro Array Multidimensional<br>";

echo "-----------------------------------------<br>";
foreach ($lapiceras as $valor)

 {
	echo "Lapicera color: ".$valor['color'] . '<br />';
	echo "<br>";
	echo "Lapicera marca: ".$valor['marca'] . '<br />';
	echo "<br>";
	echo "Lapicera precio: ".$valor['precio'] . '<br />';
	echo "<br>";

	echo "-----------------------<br>";
}

//
?>