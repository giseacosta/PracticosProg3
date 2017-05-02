<?php
	class Auto
 {

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

	public function __construct(){
		
		$parametros = func_get_args();
		
		$cantidad_parametros = func_num_args();
		
		$funcion_constructor = '__construct'.$cantidad_parametros;
		
		if(method_exists($this,$funcion_constructor))
		{ 
			call_user_func_array(array($this,$funcion_constructor),$parametros);
		}
	}
	
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




 public function Equals($au1,$au2)
 {
 	if($au1->_getMarca()==$au2->_getMarca())
 	{

 		return "True";
 	}
 	else
 	{

 		return "false";
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

class Garage{

	private $_razonsocial;
	private $_precioPorHora;
    private $_autos;

    public function __construct(){
		
		$parametros = func_get_args();
		
		$cantidad_parametros = func_num_args();
		
		$funcion_constructor = '__construct'.$cantidad_parametros;
		
		if(method_exists($this,$funcion_constructor))
		{ 
			call_user_func_array(array($this,$funcion_constructor),$parametros);
		}
	}
	
	function __construct0()
	{
		$this->__construct1("");
	}
	function __construct1($razon)
	{
		$this->__construct2($razon,"0");
	}
	
	function __construct2($razon,$precio)
	{
		$this->_razonsocial = $razon;
		$this->_precioPorHora = $precio;
		$this->_autos=array();
		
	}
         
   public function MostrarGarage()
        {

        $string="<br>Razon Social: ".$this->_razonsocial."<br>".
             "Precio Por Hora: ".$this->_precioPorHora."<br>";
             echo $string;
             foreach ($this->_autos as $au) {
             	Auto::MostrarAuto($au);
             }
             
        }

         public function Equals($auto)
        {

          $autocom=new Auto("NULL","NULL","NULL","NULL");
          
            for ($i = 0; $i < count($this->_autos); $i++)
            {
                
                if ($autocom->Equals($this->_autos[$i], $auto))
                {
                    echo "<br>El auto no se encuentra en el garage<br>";
                    return "false";
                }
 
          
            }

            return "true";   
            

        }


        public function Add($auto)

        {
        	
             

              	array_push($this->_autos,$auto);
             

       

        }


        public function Remove($auto)

        {
        	$key=array_search($auto, $this->_autos);
              if($key==="false")
              {
                 echo "<br>No hay auto<br>";
              
              }
              else {
              	unset($this->_autos[$key]);
              }

       

        }






}

?>