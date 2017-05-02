<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Empleado.php';
    
    $empleado_id = (isset($_REQUEST['empleado_id'])) ? $_REQUEST['empleado_id'] : null;
    
    if($empleado_id){        
        $empleado = Empleado::buscarPorId($empleado_id);        
    }else{
        $empleado = new Empleado();
    }
  
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
        $dni = (isset($_POST['dni'])) ? $_POST['dni'] : null;
        $apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : null;
   

        $empleado->setNombre($nombre);
        $empleado->setDNI($dni);
        $empleado->setApellido($apellido);
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

            
           
           
                break;
        }
        $foto = $path;

         //Si no existe el directorio lo crea
        $dirname = dirname($path);
        if (!is_dir($dirname))
        {
            mkdir($dirname, 0755, true);
        }

        move_uploaded_file($_FILES["archivo"]["tmp_name"], $path);

        $empleado->setFoto($foto);

        $empleado->guardar();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_empleado.php';
    }



    

   
    
?>
