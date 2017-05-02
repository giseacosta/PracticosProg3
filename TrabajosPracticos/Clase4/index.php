<?php
require "Imagen.php";


  echo ('<html>
          <body>
           <h2>IMAGENES</h2>
       <form action="subidaarchivos.php" method="POST" enctype="multipart/form-data">
          
           <table>
<thead>
<tr>
	<th>Texto</th>
	<th>Imagen</th>
</tr>
</thead>
<tr>
	<td>imagen1</td>

	<td><a href="subidaarchivos.php"><img src="Fotos/gise.jpg"  width=100 height=100></a></td>
</tr>
<tr>
	<td>imagen2</td>
	<td><a href="subidaarchivos.php"><img src="Fotos/Desert.jpg"  width=100 height=100></a></td>

</tr>
<tr>
	<td>imagen3</td>
	<td><a href="subidaarchivos.php"><img src="Fotos/Chrysanthemum.jpg"  width=100 height=100></a></td>

</tr>
</table>
    

           <br>Apellido:   <input  type="text" name="apellido" value="">  <br>
           <br><input type="file" value="Archivo" name="archivo">  

        
           <input type="submit" value="Guardar" name="Submit" >
       </form>

       ');
 


?>

