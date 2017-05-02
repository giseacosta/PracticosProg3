<?php

class Imagen 
{

	protected $_pathfoto;

	
	public function __construct()
	{

 	
	}


		public function getPath()
	{
		return $this->_pathfoto;
	}

	

	public function SetFoto($valor)
	{
		$this->_pathfoto = $valor;
	}
	

	public function ToString()
	{
	
		return $this->getPath()."\r\n";
	}



}

class Imagenes
{

public $imagenes;

public function __construct()
	{
     $this->imagenes=array();
 	
	}

public function AgregarImagen($nuevaimagen)

{


array_push($this->imagenes, $nuevaimagen);


}
public function GuardarImagen()
{

$archivo=fopen("listadeimagenes.txt", "a+");
foreach ($this->imagenes as $im) {
    fwrite($archivo, $im->ToString());
            }
         fclose($archivo);

}


public static function ArrayImagenes()
	{
/*$arrayim = array();
$file = fopen("listadeimagenes.txt","r");

 
  while(! feof($file))
  {
    $string = fgets($file);
    $ele=explode(" ; ",$string);


foreach($ele as $element)
{
echo $element."<br/>";
$ima=new Imagen();
$ima->SetFoto($element);
array_push($arrayim, $ima);
}
  }
    fclose($file);

		var_dump($arrayim);
		return $arrayim;
	}

*/

		$arrayim = array();
		
		$a = fopen("listadeimagenes.txt", "r");
		
		while(!feof($a)){
			$arr = explode(" ", fgets($a));


			if(count($arr) > 1){
				var_dump($arr);
				$imagen = new Imagen($arr[0]);
		        $imagen->SetFoto($arr);
				
				array_push($arrayim, $imagen);
			}
		}
		fclose($a);
		
		return $arrayim;
	

}

	public static function TraerTodasLasImagenes()
	{

		$listadeimagenes = array();

		//leo todos los productos del archivo
		$archivo=fopen("listadeimagenes.txt", "r");
		
		while(!feof($archivo))
		{
			$archAux = fgets($archivo);
			$imagenes = explode(" - ", $archAux);
			//http://www.w3schools.com/php/func_string_explode.asp
			$imagenes[0] = trim($imagenes[0]);
			if($imagenes[0] != ""){
				
				 $imagen = new Imagen();
				 $imagen->SetFoto($imagenes[0]);
				array_push($listadeimagenes, $imagen);
			}
		}
		fclose($archivo);
		
		return $listadeimagenes;
		
	}



}

?>