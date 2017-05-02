<?php if (!defined('CONTROLADOR')) exit; ?>

<!DOCTYPE html>
<html lang="en">
    <head>

            <title>Empleados</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="vistas/estilo.css">
        </head>
        <meta charset="utf-8">
        <title> Guardar personaje </title>
    </head>
    <body>
        <h1> Guardar personaje </h1>
            </div>
      <div class="CajaInicio animated bounceInRight">
        <form method="post" action="guardar_personaje.php">
         <label for="nombre"> Nombre </label>
            <br />
            <input type="text" name="nombre" id="nombre" value="<?php echo $personaje->getNombre() ?>" required />
            <br />
            <label for="descripcion"> Descripción </label>
            <br />
            <input type="text" name="descripcion" id="descripcion" value="<?php echo $personaje->getDescripcion() ?>" required />
            <br />            
            <?php if ($personaje->getId()): ?>
                <input type="hidden" name="personaje_id" value="<?php echo $personaje->getId() ?>" />
            <?php endif; ?>
        
             <input id="boton" class="btn btn-primary btn-sm pull-center right" type="submit" value="Guardar" name="Submit" >
            <a href="index.php"> Cancelar </a>
        </form>
           </div>
  </div>
    </body>
</html>