<?php

require "Pasajero-VueloClases.php";

 $Pasajero1 = new Pasajero("Gomez","Lola","12345","True");
 $Pasajero2 = new Pasajero("Gomez","Lola","5674","False");
 $Pasajero3= new Pasajero("Gomez","Lola","3521","True");

 $Pasajero4 = new Pasajero("Gomez","Lola","4345","True");
 $Pasajero5 = new Pasajero("Gomez","Lola","5","False");
 $Pasajero6 = new Pasajero("Gomez","Lola","6","True");

 echo"<br>Agrego Pasajeros a Vuelos<br>";
 $vuelo1=new Vuelo("Aerolineas Argentinas","4000","3");
 $vuelo2=new Vuelo("LAM","3000","3");

 echo "AGREGO PRIMERO";

  $vuelo1->AgregarPasajero($Pasajero1);
  $vuelo1->AgregarPasajero($Pasajero1);
  $vuelo1->AgregarPasajero($Pasajero1);
  $vuelo1->AgregarPasajero($Pasajero2);
  $vuelo1->AgregarPasajero($Pasajero2);
  $vuelo1->AgregarPasajero($Pasajero3);
  $vuelo1->AgregarPasajero($Pasajero4);
  ECHO "<BR>------INFORMACION VUELO:-----------<BR>";
  $vuelo1->MostrarVuelo();

  $vuelo2->AgregarPasajero($Pasajero1);
  $vuelo2->AgregarPasajero($Pasajero1);
  $vuelo2->AgregarPasajero($Pasajero1);
  $vuelo2->AgregarPasajero($Pasajero2);
  $vuelo2->AgregarPasajero($Pasajero2);
  $vuelo2->AgregarPasajero($Pasajero3);
  $vuelo2->AgregarPasajero($Pasajero4);
  ECHO "<BR>-----INFORMACION VUELO :--------------<BR>";
  $vuelo2->MostrarVuelo();
  echo Vuelo::Add($vuelo1,$vuelo2);

  ECHO "<BR>------ELIMINO PASAJERO 2-----------<BR>";
  $vuelo2->Remove($Pasajero2);
  ECHO "<BR>-----INFORMACION VUELO :--------------<BR>";
  $vuelo2->MostrarVuelo();

?>