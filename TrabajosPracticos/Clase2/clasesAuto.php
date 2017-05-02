<?php
	class Auto
 {
/*Atributos*/
 	private $_color;
	private $_precio;
	private $_marca;
	private $_fecha;


	 public function _getColor()
  {
    return $this->_color;
  }
      

   public function _getPrecio()
  {
    return $this->_precio;
  }
      

   public function _getMarca()
  {
    return $this->_marca;
  }
     
   public function _getFecha()
  {
    return $this->_fecha;
  }
	/*constructor*/
	public function __construct(){
		/*Obtenemos el parametro o los parametros que recibe el constructor*/
		$parametros = func_get_args();
		/*Obtenemos la cantidad de parametros*/
		$cantidad_parametros = func_num_args();
		/*En esta variable concatenamos al constructor con los parametros*/
		$funcion_constructor = '__construct'.$cantidad_parametros;
		/*Con este metodo_exists comprobamos si existe un metodo que reciba esa cantidad de parametros*/
		if(method_exists($this,$funcion_constructor))
		{ /*Si el metodo existe lo invocamos*/
			call_user_func_array(array($this,$funcion_constructor),$parametros);
		}
	}
	/*Metodos para la sobrecarga*/
	function __construct0()
	{
		$this->__construct1("");
	}
	function __construct1($color)
	{
		$this->__construct2($color,"0");
	}
	function __construct2($color,$marca)
	{
		$this->__construct3($color,$marca,$precio);
	}
	function __construct3($color,$marca,$precio)
	{
		$this->__construct4($color,$marca,$precio,$fecha);
	}
	function __construct4($color,$marca,$precio,$fecha)
	{
		$this->_color = $color;
		$this->_precio = $precio;
		$this->_marca = $marca;
		$this->_fecha = $fecha;
	}
	/*Metodos del ejercicio*/
	public function agregarImpuestos($impuesto)
	{
		$this->_precio = $this->_precio + $impuesto;
	}

static public function MostrarAuto($miAuto)
{
   
   echo "<br>-----------AUTO----------<BR>";
    echo $miAuto->ToString();
 
 }
         public function ToString()
        {

         return "Color: ".$this->_color."<br>".
                   "Marca: ".$this->_marca."<br>".
                   "Fecha: ".$this->_fecha."<br>".
                   "Precio: ".$this->_precio;
        }

	  public function AgregarImpuesto($impuesto)
        {

            $this->_precio += $impuesto;

  



        }


      public function AsignaObjeto($obj)
      {

       $nuevoau=new Auto();
       $obj=$nuevoau;

      }

  public function Equals($au)
     {
         $au2=AsignaObjeto 
          $string="No son iguales";
          $string2="Son iguales";
    if($au->_getMarca()==$au2->_getMarca())

 {


 	return $string2;

 }
 else
 {

 	return $string;
 }
        }
    


static public function Add($miAuto1,$miAuto2)
{
	$string="No son iguales";
    if(($miAuto1->_getMarca()==$miAuto2->_getMarca())&& ($miAuto1->_getColor()==$miAuto2->_getColor()))

 {

  $precioTotal=$miAuto2->_getPrecio()+$miAuto1->_getPrecio();



 	return $precioTotal;

 }
 else
 {

 	return $string;;
 }
 
 }
 }


?>