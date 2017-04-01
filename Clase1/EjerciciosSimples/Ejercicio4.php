

<?php


$operador="+";
$var1=5;
$var2=3;
$resultado;
echo ("CASO 1:<br>");
echo ("Operador  SUMA:<br>".$var1."<br>+<br>".$var2."<br>");

echo ("_______<br>");
switch ($operador) {
	case '+':
		$resultado=$var1+$var2;
		break;
	case '-':
		$resultado=$var1-$var2;
		break;
	case '*':
		$resultado=$var1*$var2;
		break;
	case '/':
		$resultado=$var1/$var2;
		break;
	
	default:
		break;
}

echo ("Resultado:".$resultado."<br>");

$operador="-";
$var1=5;
$var2=3;
$resultado;
echo ("CASO 2:<br>");
echo ("Operador  RESTA:<br>".$var1."<br>-<br>".$var2."<br>");

echo ("_______<br>");
switch ($operador) {
	case '+':
		$resultado=$var1+$var2;
		break;
	case '-':
		$resultado=$var1-$var2;
		break;
	case '*':
		$resultado=$var1*$var2;
		break;
	case '/':
		$resultado=$var1/$var2;
		break;
	
	default:
		break;
}



echo ("Resultado:".$resultado."<br>");


$operador="*";
$var1=5;
$var2=3;
$resultado;
echo ("CASO 1:<br>");
echo ("Operador  MULTIPLICACION:<br>".$var1."<br>*<br>".$var2."<br>");

echo ("_______<br>");
switch ($operador) {
	case '+':
		$resultado=$var1+$var2;
		break;
	case '-':
		$resultado=$var1-$var2;
		break;
	case '*':
		$resultado=$var1*$var2;
		break;
	case '/':
		$resultado=$var1/$var2;
		break;
	
	default:
		break;
}



echo ("Resultado:".$resultado."<br>");


$operador="/";
$var1=5;
$var2=3;
$resultado;
echo ("CASO 1:<br>");
echo ("Operador  DIVISION:<br>".$var1."<br>/<br>".$var2."<br>");

echo ("_______<br>");
switch ($operador) {
	case '+':
		$resultado=$var1+$var2;
		break;
	case '-':
		$resultado=$var1-$var2;
		break;
	case '*':
		$resultado=$var1*$var2;
		break;
	case '/':
		$resultado=$var1/$var2;
		break;
	
	default:
		break;
}



echo ("Resultado:".$resultado."<br>");






?>