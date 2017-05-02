<?php
	class Pasajero
 {

 	private $_apellido;
	private $_nombre;
	private $_dni;
	private $_esPlus;

	public function __construct($apellido,$nombre,$dni,$esplus)
	{

		$this->_apellido=$apellido;
		$this->_nombre=$nombre;
		$this->_dni=$dni;
		$this->_esPlus=$esplus;
	}


   public function _getDNI()
  {
    return $this->_dni;
  }

   public function _getPlus()
  {
    return $this->_esPlus;
  }

	 public function Equals($pa1,$pa2)
 {
 	if($pa1->_getDNI()==$pa2->_getDNI())
 	 {
    return "true";
  }
  else
  {
 
    return "false";
  }




}
 public function _getInfoPasajero()
  {
    return "<br>Apellido:".$this->_apellido."<br>Nombre:".$this->_nombre."<br>DNI:".$this->_dni."<br>Es Plus:".$this->_esPlus;
  }

 static public function MostrarPasajero($pasa)
{
  echo $pasa->_getInfoPasajero();	

}
}



	class Vuelo
 {
    private $_fecha;
		private $_empresa;
		private $_precio;
		private $_listaDePasajeros;
		private $_cantMaxima;


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
	function __construct1($empresa)
	{
		$this->__construct2($empresa,"0");
	}
	function __construct2($empresa,$precio)
	{
		$this->__construct3($empresa,$precio,$cantMaxima);
	}
	
	function __construct3($empresa,$precio,$cantMaxima)
	{
		$this->_empresa = $empresa;
		$this->_precio = $precio;
		$this->_cantMaxima = $cantMaxima;
		$this->_listaDePasajeros=array();
		
	}

	  public function _getPrecio($pasa)
  {

  
  	if($pasa->_getPlus()=="True")
  	{
  		 return $precio=($this->_precio)-($this->_precio*20)/100;
  	}
  	else
  	{
     return $this->_precio;

  	}
    
  }
  public function _getCan()
  {

    return $this->_cantMaxima;
  }


        public function MostrarVuelo()
        {


       
        	 $string="<br>Empresa: ".$this->_empresa."<br>".
             "Precio: ".$this->_precio."<br>"."Cantidad maxima:".$this->_cantMaxima."<br>";
           echo $string;
             foreach ($this->_listaDePasajeros as $pasa) {
             	Pasajero::MostrarPasajero($pasa);
             }

             
        }



        public function AgregarPasajero($pasajero)
        {
        
          $contador=count($this->_listaDePasajeros);
          
         
           if($contador==0 || $contador<$this->_cantMaxima)
           
           
            {
            	if($this->Equals($pasajero)==(bool)false)
            	{
           
           	echo "<br>PASAJERO AGREGADO<br>";
           }
           else
           {

           	echo "<br>Error:PASAJERO YA INGRESADO<BR>";
           }
           }
     
           else
           {

           	echo "<BR>Error:cantidad maxima de pasajeros superada<br>";
           }
        
          

           
           }
              
             
          
         public function Equals($pasa)
         {

          $key=array_search($pasa, $this->_listaDePasajeros);
        
             if ($key!==(bool)false)
             {

             	return true;
             }
             else
             {
 	       array_push($this->_listaDePasajeros, $pasa);
             	return false;
             }
           }
         
       	    

       
        static public function Add($vuelo1,$vuelo2)
{
	$preciovuelo1=0;
	$preciovuelo2=0;


	foreach ($vuelo1->_listaDePasajeros as $pasa) {
        echo "<br>Precio pasajero:<br>";
        echo $vuelo1->_getPrecio($pasa);
		$preciovuelo1=$preciovuelo1+$vuelo1->_getPrecio($pasa);
	}
   

   foreach ($vuelo2->_listaDePasajeros as $pasa) {
   	    echo "<br>Precio pasajero:<br>";
          echo $vuelo2->_getPrecio($pasa);
		$preciovuelo2=$preciovuelo2+$vuelo2->_getPrecio($pasa);
	
	}

	   $precioTotal=$preciovuelo1+$preciovuelo2;

    echo "<BR>PRECIO TOTAL VUELO 1:<BR>".$preciovuelo1;
    echo "<BR>PRECIO TOTAL VUELO 2:<BR>".$preciovuelo2;

 	echo "<BR>PRECIO TOTAL DE VUELOS:<BR>".$precioTotal;

 

 
 }






        


  public function Remove($pasa)

        {
        	$key=array_search($pasa, $this->_listaDePasajeros);
              if($key==="false")
              {
                 echo "<br>No hay pasajero<br>";
              
              }
              else {
              	unset($this->_listaDePasajeros[$key]);
              }

       

        }
}





?>