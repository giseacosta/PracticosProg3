
<?php

class Empleado
{
public $legajo;
public $apellido;
public $nombre;
public $salario;

public function GetApellido()
	{
		return $this->apellido;
	}
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetLegajo()
	{
		return $this->legajo;
	}
	public function GetSalario()
	{
		return $this->salario;
	}
	public function SetApellido($valor)
	{
		$this->apellido = $valor;
	}
	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetLegajo($valor)
	{
		$this->legajo = $valor;
	}
	public function SetSalario($valor)
	{
		$this->salario = $valor;
	}

public function __construct()

{

} 



	

public function _toString()
{

 return $this->nombre."-".$this->apellido."-".$this->legajo."-".$this->salario."\r\n";


}
}

class Fabrica 
{
	public $numero;
	public $empleados;


public function __construct($numero)

{

$this->numero=$numero;
$this->empleados=array();
} 

public function AgregarEmpleado($nuevoempleado)

{


array_push($this->empleados, $nuevoempleado);


}
public function GuardarEmpleado()
{

$archivo=fopen("listadodeempleados.txt", "a");
foreach ($this->empleados as $emp) {
    fwrite($archivo, $emp->_toString());
            }
         fclose($archivo);

}


public static function ArrayEmpleados()
	{
		$arremp = array();
		
		$a = fopen("listadodeempleados.txt", "r");
		
		while(!feof($a)){
			$arr = explode("-", fgets($a));
			if(count($arr) > 1){
				$emp = new Empleado();
				$emp->SetSalario($arr[3]);
				$emp->SetLegajo($arr[2]);
				
				$emp->SetNombre($arr[1]);
				$emp->SetApellido($arr[0]);
				
				array_push($arremp, $emp);
			}
		}
		fclose($a);
		
		return $arremp;
	}
	

}

?>