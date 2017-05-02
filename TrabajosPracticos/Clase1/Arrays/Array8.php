<?php



$vector_asociativo = array(
'1' => '90',
'30' => '7',
'e' => '99',
'hola' => 'mundo'
);
echo "Array Asociativo:<br>";
foreach ($vector_asociativo as $key=>$value)

 {
	echo "El valor de posicion ".$key." es : ".$value;
	echo "<br>";
}
var_dump($vector_asociativo);

?>
