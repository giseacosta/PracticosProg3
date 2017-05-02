<?php

require "OperarioFabricaClases.php";

echo "<br>Creo Operarios<br>";
 $op1 = new Operario("12345","Gomez","Lola");
 $op2 = new Operario("4681","Gomez","Lola");
 $op3= new Operario("456","Gomez","Lola");
$op4= new Operario("456455","Gomez","Lola");
echo"<br>Agrego Operarios<br>";
 $fab=new Fabrica("ARCOR");

 $fab->Add($op1);
 $fab->Add($op2);
 $fab->Add($op2);
 $fab->Add($op3);
 $fab->Add($op4);
 echo "<br>------Muesto Fabrica:-------<br>";
 $fab->MostrarFabrica();
 echo "<br>------Elimino OP1:-------<br>";
 $fab->Remove($op1);
  echo "<br>------Muesto Fabrica:-------<br>";
 $fab->MostrarFabrica();
echo "<br>Costo Fabrica:<br>";
 Fabrica::MostrarCosto($fab);
?>
