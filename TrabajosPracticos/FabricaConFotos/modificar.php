
<?php


require "empleado.php";
//include("FormularioEditado.php");


  

    if (isset($_POST['Guardar'])) {
        
         $selectedmodi = $_POST['modificar'];



       if($selectedmodi!==NULL)
  {
  
         $obje=Fabrica::BuscarporDNI($selectedmodi);
     
  
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
      <h1>EDICION DE FORMULARIO</h1>
       <form id="FormIngreso" action="edicion.php" method="POST" enctype="multipart/form-data">

         <br />
       
          
             <input type="text" name="nombre" id="nombre" value="'.$obje->GetNombre().'">
           
              <input type="text" name="apellido" id="apellido" value="'.$obje->GetApellido().'">
         
               <input type="text" name="dni" id="dni" value="'.$obje->GetDNI().'">

            <input type="text" name="salario" id="salario" value="'.$obje->getSueldo().'">


           <input type="text" name="legajo" id="legajo" value="'.$obje->getLegajo().'">

            <input type="text" name="sexo" id="sexo" value="'.$obje->GetSexo().'">
          

           <br><input id="boton" type="file" name="archivo" value="'.$obje->getPath().'">  

        
           <input id="boton" class="MiBotonUTN" type="submit" value="Guardar" name="Submit" >
       </form>
       </div>
  </div>
    </body>
</html>

');


               

  }

       


        
    }


    


?>
