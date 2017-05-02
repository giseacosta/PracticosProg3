
<?php
abstract class FiguraGeometrica 
{
    
    protected $_color;
    protected $_perimetro;
    protected $_superficie;
  
 
  public  function  __construct(){}
    
  public function _getColor()
  {
    return $this->_color;
  }

   public function _setColor($color)
  {
   $this->_color = $color;
  }

public abstract  function Dibujar(); 
protected abstract  function CalcularDatos(); 

 public function ToString()
        {
            return "Perimetro: ".$this->_perimetro."<br>".
                   "Superficie: ".$this->_superficie."<br>".
                   "Color: ".$this->_color;
        }

}

class Rectangulo extends FiguraGeometrica {
    protected $_ladouno;
    protected $_ladodos;




    public  function  __construct($lado1,$lado2){
      
       $this->_ladouno =$lado1;
        $this->_ladodos=$lado2;
        $this->CalcularDatos();
       
    }
protected function CalcularDatos()
{

$this->_superficie=$this->_ladouno*$this->_ladodos;
$this->_perimetro=2*($this->_ladouno+$this->_ladodos);

}


  public function _setLado1($ladouno)
  {
   $this->_ladouno = $ladouno;
  }

  public function getLado1()
  {
    return $this->_ladouno;
  }


  public function _setLado2($ladodos)
    {

       $this->_ladodos=$ladodos;
    }


 public function getLado2()
  {
    return $this->_ladodos;
  }

public function Dibujar()

{
  

for ($i=0;$i < $this->_ladouno;$i++){ 
for($j=0;$j<$this->_ladodos;$j++){ 
$ast="*"; 
echo "<font color='green'>$ast</font>";

} 
echo "<br>"; 

} 
}



 public function ToString()
        {
            echo "RECTANGULO"."<BR>";
            $this -> Dibujar();
            echo  parent::ToString()."<br>".
                    "Valor Lado Uno: ".$this->_ladouno."---".
                    "ValornLado Dos: ".$this->_ladodos."<br>";
            
        }


}

class Triangulo extends FiguraGeometrica {
    protected $_altura;
    protected $_base;


public  function __construct($base,$altura){
 
        $this->_base = $base;
        $this->_altura=$altura;
        $this->CalcularDatos();
       
    }

    protected function CalcularDatos()
{

$this->_superficie=($this->_base*$this->_altura)/2;
$this->_perimetro=(2*$this->_altura)+$this->_base;

}


public function _setAltura($altura)
    {

       $this->_altura=$altura;
    }
   
public function getAltura()
  {
    return $this->_altura;
  }
public function _setBase($base)
    {

       $this->_base=$base;
    }

  public function getBase()
  {
    return $this->_base;
  }


public function Dibujar()



{
    
    $cadena = null;
    for ($i = 1; $i <= $this->_altura; $i++) {
      for ($j = 0; $j < $this->_base - $i - 1; $j++) echo '&nbsp'; 
        for ($h = $i; $h <= $i; $h++) 
            $cadena .= "*";
        echo "<font color='blue'>$cadena<br></font>";
     
    }
 
}

 public function ToString()
        {
            echo " TRIANGULO"."<BR>";
            
            $this->Dibujar();
            echo parent::ToString()."<br>".
                    "Valor Altura: ".$this->_altura."---".
                    "Valor Base: ".$this->_base."<br>";
        }


}




?>