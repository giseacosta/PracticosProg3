<?php



function Sumar($var1,$var2)
{
    return $var1 + $var2;
}



function Potencia($var1,$var2)
{
    return pow($var1,$var2);
}

function Invertido($var1)
{
    return strrev($var1);
}

function LongitugPalabra($string,$max)
{

if(strlen($string)<$max){ 
	
    if(strcmp($string, "Recuperatorio") == 0 ||  strcmp($string, "Parcial") == 0 ||  strcmp($string, "Programacion") == 0){ 
              
          echo "La palabra: ".$string." es valida y cumple con la condicion de longitud<br>";
            return 1;

    }
    echo "La palabra:".$string." cumple con la longitud necesaria pero no es valida<br> ";
     
} 
else  {
	    echo "No cumple con la longitud solicitada:".$max."<br>";
     	return 0;
     }

   }


function esPar($var)
{


if ($var%2==0){
    echo "el $var es par";
}else{
    echo "el $var es impar";
}

}



function esImpar($var)
{


if ($var%2!=0){
    echo "el $var es impar";
}else{
    echo "el $var es par";
}

}



?>