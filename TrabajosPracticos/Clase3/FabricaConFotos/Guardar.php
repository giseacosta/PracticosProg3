<?php

echo('<html>

<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    <body>
      <div class="container">
    <div class="page-header">
      <h1>EMPLEADOS</h1>      
    </div>
      <div class="CajaInicio animated bounceInRight">
      <h1>ALTA-EMPLEADO - con archivos - </h1>
       <form id="FormIngreso" action="administracion.php" method="POST" enctype="multipart/form-data">
          
             <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">
           
              <input type="text" name="apellido" id="apellido" placeholder="Ingrese apellido">
         
               <input type="text" name="dni" id="dni" placeholder="Ingrese DNI">

            <input type="text" name="salario" id="salario" placeholder="Ingrese SUELDO">


           <input type="text" name="legajo" id="legajo" placeholder="Ingrese LEGAJO">

            <input type="text" name="sexo" id="sexo" placeholder="Ingrese Sexo">
          

           <br><input id="boton" type="file" value="Archivo" name="archivo">  

        
           <input id="boton" class="MiBotonUTN" type="submit" value="Guardar" name="Submit" >
       </form>
       </div>
  </div>
    </body>
</html>

');

?>