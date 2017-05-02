<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Empleado.php';
    
    $empleados = Empleado::recuperarTodos();
    
    require_once 'vistas/index.php';
    
?>

