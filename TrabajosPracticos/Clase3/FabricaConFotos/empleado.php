
<?php

abstract class Persona 
{


private $_apellido;
private $_dni;
private $_nombre;
private $_sexo;


	public function __construct($nombre, $apellido, $sexo, $dni)
	{
		$this->_apellido = $apellido;
		$this->_nombre = $nombre;
		$this->_sexo = $sexo;
		$this->_dni = $dni;
	}


public function GetApellido()
	{
		return $this->_apellido;
	}
	public function GetNombre()
	{
		return $this->_nombre;
	}
	public function GetDNI()
	{
		return $this->_dni;
	}
	public function GetSexo()
	{
		return $this->_sexo;
	} 



public abstract function Hablar($idioma);


	public function ToString()
	{
		return $this->GetApellido()." ".$this->GetNombre()." ".$this->GetDNI()." ".$this->GetSexo();
	}
   }


class Empleado extends Persona
{
	protected $_legajo;
	protected $_pathfoto;
	protected $_sueldo;
	public function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
	{
		parent::__construct($nombre, $apellido, $dni, $sexo);
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;
	
	}
	public function getLegajo()
	{
		return $this->_legajo;
	}

		public function getPath()
	{
		return $this->_pathfoto;
	}

	public function getSueldo()
	{
		return $this->_sueldo;
	}

	public function SetFoto($valor)
	{
		$this->_pathfoto = $valor;
	}
	public function Hablar($idioma)
	{
		return $idioma;
	}
	public function ToString()
	{
		$mostrar = parent::ToString();
		return $mostrar." ".$this->getLegajo()." ".$this->getSueldo()." ".$this->getPath()."\r\n";
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
    fwrite($archivo, $emp->ToString());
            }
         fclose($archivo);

}


public static function ArrayEmpleados()
	{
		$arremp = array();
		
		$a = fopen("listadodeempleados.txt", "r");
		
		while(!feof($a)){
			$arr = explode(" ", fgets($a));
			if(count($arr) > 1){
				$emp = new Empleado($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5]);
		        $emp->SetFoto($arr[6]);


				
				array_push($arremp, $emp);
			}
		}
		fclose($a);
		
		return $arremp;
	}


public static function BorrarEmpleado($dni)
	{



		$array=Fabrica::ArrayEmpleados();


			foreach($array AS $p){
			if($p->GetDni()==$dni)
			{

				$key=array_search($p, $array);
			  unset($array[$key]);
			}
		}

	
		
	
		
		$a = fopen("listadodeempleados.txt", "w");
		fclose($a);
		
$archivo=fopen("listadodeempleados.txt", "a");
foreach ($array as $emp) {
    fwrite($archivo, $emp->ToString());
            }
         fclose($archivo);
			
		return $array;	
		
	}



public static function BuscarporDNI($dni)
	{



		$array=Fabrica::ArrayEmpleados();


			foreach($array AS $p){
			if($p->GetDni()==$dni)
			{

				$key=array_search($p, $array);
			  return $p;
			}
		}


	
		
	
		
	}


	

}




?>