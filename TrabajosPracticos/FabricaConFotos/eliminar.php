
<?php

require "empleado.php";



  

    if (isset($_POST['Guardar'])) {
         $selectedelim= $_POST['eliminar'];
       
  if($selectedelim!==NULL)
  {
  
          $array=Fabrica::BorrarEmpleado($selectedelim);
        
               
              
                include("mensaje.php");

                 echo "EMPLEADO ELIMINADO!! ";

  }




    }








?>
