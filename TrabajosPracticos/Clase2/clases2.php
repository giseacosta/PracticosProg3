<?php

class Rectangulo
{

 private $_vertice1;
 private $_vertice2;
 private $_vertice3;
 private $_vertice4;

 private $_area;
 private $_lado1;
 private $_lado2;
 private $_perimetro;

   public function __construct($vertice1,$vertice3)
       {
        $this->_vertice1=$vertice1;
        $this->_vertice3=$vertice3;
        $vZ1=$vertice1->getZ();
        $vP1=$vertice1->getP();
        $vZ3=$vertice3->getZ();
        $vP3=$vertice3->getP();


        $this->_vertice2= new Punto($vZ3, $vP3);
        $this->_vertice4= new Punto($vZ1, $vP3);
        $l1=$vZ1 - $vZ3;
        $l2=$vP1 - $vP3;



       $this->_lado1 = abs($l1);
        $this->_lado2= abs($l2);

        $this->_perimetro = ($this->_lado1 * 2) + ($this->_lado2 * 2);
        $this->_area = $this->_lado1 * $this->_lado2;

    
       }

         public function ToString()
        {   
        	echo "RECTANGULO"."<BR>";
            echo "El lado menor es: ".$this->_lado1."<br>El lado mayor es:
            ".$this->_lado2."<br>El Area es: ".$this->_area."<br>El Perimetro es: ".$this->_perimetro."<br>";
          
          for ($i=0;$i < $this->_lado1;$i++){ 
               for($j=0;$j<$this->_lado2;$j++){ 
                $ast="*"; 
               echo "<font color='green'>$ast</font>";

                     } 
                echo "<br>"; 

} 
        }

}



class Punto
{

 private $_z;
 private $_p;

public function __construct($z,$p)
{

$this->_z = $z;
$this->_p = $p;

}


  public function getZ()
  {
    return $this->_z;
  }


   public function getP()
  {
    return $this->_p;
  }




	
}



?>