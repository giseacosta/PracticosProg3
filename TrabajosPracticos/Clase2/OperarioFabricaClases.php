<?php
	class Operario
 {

 	private $_apellido;
	private $_legajo;
	private $_nombre;

	private $_salario;

  public function __construct($legajo,$apellido,$nombre)
  {

  	$this->_legajo=$legajo;
  	$this->_apellido=$apellido;
  	$this->_nombre=$nombre;
  }


 public function _getNombreApellido()
  {
    return $nombrecompleto=$this->_nombre.",".$this->_apellido;
  }
 public function _getSalario()
  {

    return $this->_salario="9000";
  }
public function MostrarOp()
  {
  	
    return "<br>Apellido y Nombre:".$this->_getNombreApellido()."<br>Legajo:".$this->_legajo."<br>Salario:".$this->SetAumentarSalario("3");
  }


   static public function Mostrar($op)
{
  echo $op->MostrarOp();	

}


public function Equals($op1,$op2)
 {
 	if($op1->$this->_nombre==$op2->$this->_nombre && $op1->$this->_apellido==$op2->$this->_apellido &&  $op1->$this->_legajo==$op2->$this->_legajo)
 	 {
    return "true";
  }
  else
  {
 
    return "false";
  }
}


public function SetAumentarSalario($aumento)
  {
  	(int)$salarioaumentado=((int)$this->_getSalario())+((int)$this->_getSalario()*(int)$aumento)/100;
   
    return (int)$salarioaumentado;
  }



}	


class Fabrica
 {
   
        private $_cantMaximaOperarios;
	 	private $_razonSocial;
	    private $_operarios;

	    function __construct($razonSocial){
			$this->_razonSocial = $razonSocial;
			$this->_operarios = array();
		}
		

    
         public  function Equals($op)
         {

        
         $key=array_search($op, $this->_operarios);
        
             if ($key!==(bool)false)
             {

             	return true;
             }
             else
             {
 	       
             	return false;
             }
           }


         
      


        public function Add($op)
        {
        $this->_cantMaximaOperarios=3;
          $contador=count($this->_operarios);
          
         
           if($contador==0 || $contador<$this->_cantMaximaOperarios)
           
           
            {
            	if($this->Equals($op)==(bool)false)
            	{
           
             $esigual=$this->Equals($op);
           
            array_push($this->_operarios, $op);
           	echo "<br>OPERARIO AGREGADO<br>";
           }
           else
           {

           	echo "<br>Error:OPERARIO YA INGRESADO<BR>";
           }
           }
     
           else
           {

           	echo "<BR>Error:cantidad maxima de OPERARIOS superada<br>";
           }
        
          

           
           }




        public function MostrarFabrica()
        {


       
        	 $string="<br>Razon Social: ".$this->_razonSocial."<br>Cantidad maxima:".$this->_cantMaximaOperarios."<br>";
           echo $string;
             foreach ($this->_operarios as $op) {
             	Operario::Mostrar($op);
             }

             
        }
       

          public function Remove($op)

        {
        	$key=array_search($op, $this->_operarios);
              if($key==="false")
              {
                 echo "<br>No hay operario<br>";
                 return false;
              
              }
              else {
              	unset($this->_operarios[$key]);
              	return true;
              }

       

        }

public function RetornarCosto()
{
	  $costototal=0;

 foreach ($this->_operarios as $op) {
   	  
       
		$costototal=$costototal+$op->SetAumentarSalario(3);
	
	}

	return $costototal;

}


   static public function MostrarCosto($fab)
{
	echo $fab->RetornarCosto();
	}
   




         
}

?>