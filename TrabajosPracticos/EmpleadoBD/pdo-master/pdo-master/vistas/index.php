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
    <body>

 
        <h1> Personajes </h1>


         <table border="1" id="tabla">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                          <th>Apellido</th>
                            <th>foto</th>
                       <th>Seleccione</th>
                    </tr>
                </thead>
          <tbody>

         
        <?php if (count($empleados) > 0): ?>

        <?php  foreach ($empleados as $item): ?>
        <tr>
                   
                        <td><?php echo $item['nombre'] ?></td>

                        <td><?php echo $item['dni'] ?></td>
                          <td><?php echo $item['apellido'] ?></td>
                         <td> <?php echo $item['foto']; ?></td>

                      <td><a href="guardar_personaje.php?empleado_id= <?php echo $item['id'] ?>"> Editar </a><a href="eliminar_personaje.php?empleado_id=<?php echo $item['id'] ?>"> Eliminar </a>  </td>
       </tr>
                   
                                    
                
                <?php endforeach; ?>
           </tbody>

        </table>
    
        <?php else: ?>
            <p> No hay personajes para mostrar </p>
        <?php endif; ?>
         <a class="btn btn-primary" href="guardar_personaje.php">Ingresar otro personaje</a> </p> 
    </body>
</html>






     

