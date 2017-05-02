<?php
require "empleado.php";
//require "administracion.php";



//echo "<br>Muestro empleado<br>";


$file = fopen("listadodeempleados.txt","r");

 
  while(! feof($file))
  {
    $string = fgets($file);
    $ele=explode(" ; ",$string);


/*foreach($ele as $element)
{
echo $element."<br/>";
}*/

  }
    fclose($file);


//echo "<br/>MOSTRANDO ARRAY<br/>";
    $array=Fabrica::ArrayEmpleados();

    foreach ($array as $emp) {
              $path=$emp->getPath();
              //echo "<img src='".$path."' border='0' width='100' height='100'>"."<br/>"; 
               //	echo $emp->ToString()."<br/>";
              
           

             }


  echo ('<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Empleados</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                 <link rel="stylesheet" type="text/css" href="estilo.css">
        </head>
        <body>
        <a class="btn btn-primary" href="Guardar.php">Ingresar otro empleado</a>
            <h2>Historial de resultados</h2>
            <table border="1" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Sexo</th>
                        <th>Legajo</th>
                        <th>Sueldo</th>
                        <th>Foto</th>
                        <th>Seleccione</th>
                    </tr>
                </thead>
                <tbody>');
                foreach ($array as $elEmpleado)
                {
                    //echo $elEmpleado->ToString()."<br>"
                    echo ('<tr>
                        <td>'.$elEmpleado->GetNombre().'</td><td>'.$elEmpleado->GetApellido().'</td>
                        <td>'.$elEmpleado->GetDNI().'</td>
                        <td>'.$elEmpleado->GetSexo().'</td>
                        <td>'.$elEmpleado->getLegajo().'</td>
                        <td>'.$elEmpleado->getSueldo().'</td>
                        <td><img src="'.$elEmpleado->getPath().'"alt="'.$elEmpleado->GetNombre().' '.$elEmpleado->GetApellido().'"style="width:100px"> </td>
                        <td>

    <form name="frmBorrar" action="eliminar.php" class="miClase" id="FormIngreso" method="POST" >


         <input type="checkbox" name="eliminar" value="'.$elEmpleado->GetDNI().'"> Seleccione para eliminar<br>

                            <input type="submit" Name = "Guardar"  class="btn btn-success btn-sm pull-center right" value="Eliminar" "/>
                            <br>


                          </form >

                           <form name="frmModificar" action="modificar.php" class="miClase" id="FormIngreso" method="POST" >


     
         <input type="checkbox" name="modificar" value="'.$elEmpleado->GetDNI().'"> Seleccione para editar<br>
                            <input type="submit" Name = "Guardar"  class="btn btn-success btn-sm pull-center right" value="Modificar" "/>
                            <br>


                          </form >
                          </td>
                    </tr>');                
                }
            echo ('</tbody>
            </table>');


echo '  <br>    <div class="form-group row">

                           

                          
</div>
</body>
        </html>';

?>