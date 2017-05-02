
<?php

require "empleado.php";


    	
$leg = $_POST['legajo']; 

$apellido = $_POST['apellido'];

$nombre = $_POST['nombre'];


$salario = $_POST['salario'];


$empleado=new Empleado();

$empleado->SetLegajo($leg);
$empleado->SetSalario($salario);
$empleado->SetNombre($nombre);
$empleado->SetApellido($apellido);
$dir="Mostrar.php";
$direrror="Index.html";
$fabrica=new Fabrica(1254);



if(isset($_POST['Submit']))
{
 $fabrica->AgregarEmpleado($empleado);
$fabrica->GuardarEmpleado();

echo "EMPLEADO AGREGADO!! ";
echo "<a href='".$dir."'>Mostrar</a>";

}
else
{
echo "<a href='".$direrror."'>Volver a agregar</a>";

}


?>



