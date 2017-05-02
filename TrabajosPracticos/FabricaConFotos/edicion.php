
<?php

require "empleado.php";


    	
$leg = $_POST['legajo']; 

$apellido = $_POST['apellido'];

$nombre = $_POST['nombre'];


$salario = $_POST['salario'];

$dni = $_POST['dni'];


$sexo = $_POST['sexo'];
$extension = end(explode(".", $_FILES['archivo']['name']));




if ($nombre=="" or $apellido=="" or $dni=="" or $leg=="" or $salario=="" or $sexo=="" or $extension==null)
{
    include("mensaje.php");
    echo "Error. Ingrese todos los datos<br>";
   // echo '<a href="Index.html">Volver</a>';
} 
else 
{

    $empleado=new Empleado($nombre, $apellido, $dni, $sexo, $leg, $salario);
    //Valido Tamaño
    if ($_FILES["archivo"]["size"]>1000000) 
    {
        include("mensaje.php");
        echo "Error. La imagen tiene que pesar menos de 1MB<br>";
        //echo '<a href="Index.html">Volver</a>';
    }
    else
    {
    	$extension = end(explode(".", $_FILES['archivo']['name']));
        $pathfoto="Fotos/".$dni."-".$apellido;

        switch ($extension) 
        {
            case 'jpg':
                $path = $pathfoto.".".$extension;
                break;
            case 'GIF':
                   $path = $pathfoto.".".$extension;
                break;
            case 'PNG':
                  $path = $pathfoto.".".$extension;
                break;
            case 'BMP':
                   $path = $pathfoto.".".$extension;
                break;
            
            default:

            
               include("mensaje.php");
                //echo '<a href="index.html">Volver</a>';
                break;
        }

    }


if(empty($path))
    

        {   
            include("mensaje.php");
        echo "<br>Debe subir un archivo JPG, BMP, GIF, PNG o JPEG<br>";
         
}
else
{

        //Si no existe el directorio lo crea
        $dirname = dirname($path);
        if (!is_dir($dirname))
        {
            mkdir($dirname, 0755, true);
        }
        //Comprueba si ya hay una foto del empleado
        if (is_file($path)) 
        {
            include("mensaje.php");
            echo "Ya hay una foto del empleado ingresado<br>";
            //echo '<a href="index.html">Volver</a>';
        }
        else
        {
        
            move_uploaded_file($_FILES["archivo"]["tmp_name"], $path);
            echo "Se agregó la imagen<br>";
            $empleado->SetFoto($path);
             $fabrica=new Fabrica(1254);
             if(isset($_POST['Submit']))
               {

              
               $array=Fabrica::BorrarEmpleado($dni);
                $fabrica->AgregarEmpleado($empleado);
                $fabrica->GuardarEmpleado();
                include("mensaje.php");

                 echo "EMPLEADO Modificado!! ";


          
       //echo "<a href='".$dir."'>Mostrar</a>";
        }
    }
}

}
?>



