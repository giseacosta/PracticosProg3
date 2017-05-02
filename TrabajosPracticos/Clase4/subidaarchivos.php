 <?php
 require "Imagen.php";

 echo ('<img src="Fotos/gise.jpg"  width=400 height=400/><br>');
 echo ('<img src="Fotos/Desert.jpg"  width=400 height=400/><br>');
  echo ('<img src="Fotos/Chrysanthemum.jpg"  width=400 height=400/><br>');

$imagen1=new Imagen();
 $imagen1->SetFoto("Fotos/gise.jpg");
 $imagen2=new Imagen();
 $imagen2->SetFoto("Fotos/Desert.jpg");
 $imagen3=new Imagen();
 $imagen3->SetFoto("Fotos/Chrysanthemum.jpg");

$apellido = $_POST['apellido'];
$imagenes=new Imagenes();

$im=new Imagen();

if ($_FILES["archivo"]["size"]>1000000) 
    {
        echo "Error. La imagen tiene que pesar menos de 1MB<br>";
        echo '<a href="Index.html">Volver</a>';
    }
    else
    {
       $extension = end(explode(".", $_FILES['archivo']['name']));
                  $pathfoto="Fotos/".$apellido;
                 
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

            
               
                echo '<a href="index.php">Volver</a>';
                break;
        }

    }


if(empty($path))
    
{           echo "<br>Debe subir un archivo JPG, BMP, GIF, PNG o JPEG<br>";
         
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
            echo "Ya hay una foto  ingresada<br>";
            echo '<a href="index.php">Volver</a>';
        }
        else
        {
            //Mueve el archivo del directorio tmp al path
     
            move_uploaded_file($_FILES["archivo"]["tmp_name"], $path);
            echo "Se agregó la imagen<br>";

            $im->SetFoto($path);




             if(isset($_POST['Submit']))
               {
              
           $imagenes->AgregarImagen($im);
           $imagenes->GuardarImagen();

                 echo "IMAGEN AGREGADA!! ";


          
       
        }
    }
}     

             
            

        

echo "<br/>MOSTRANDO ARRAY<br/>";
   $array=Imagenes::TraerTodasLasImagenes();
    //$array=Imagenes::ArrayImagenes();

    foreach ($array as $ima) {
              $path=$ima->getPath();
             // echo "<img src='".$path."' border='0' width='100' height='100'>"."<br/>"; 
             
              
           

             }



 echo ('<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Empleados</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="estilo.css">
        </head>
        <body>
            <h2>Historial de resultados</h2>
            <table border="1" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                         <th>Foto</th>
                    </tr>
                </thead>
                <tbody>');
                foreach ($array as $im)
                {
                   
                    echo ('<tr>
                          <td>'.$im->getPath().'</td>
                          <td><img src="'.$im->getPath().'"alt=""style="width:200px"> </td>
                    </tr>');                
                }
            echo ('</tbody>
            </table>');
echo '<br><a href="index.php">Ingresar OTRA IMAGEN</a></body>
        </html>';

 ?>