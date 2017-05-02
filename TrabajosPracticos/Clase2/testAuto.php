<?php

require "clasesAuto-Garage.php";

 $Auto1 = new Auto("Rojo","Fiat","10000","SIN FECHA");
 $Auto2 = new Auto("Rojo","Fiat","20000","SIN FECHA");
 $Auto3 = new Auto("Gris","Ford","12000","SIN FECHA");
 $Auto4 = new Auto("Gris","Ford","15555","SIN FECHA");
 $Auto5 = new Auto("Gris","Renault","23444","23-03-2017");
 $Auto3->AgregarImpuesto(1500);
 $Auto4->AgregarImpuesto(1500);
 $Auto5->AgregarImpuesto(1500);
 echo "Suma Auto1- Auto2<br>";
 $importeDouble = Auto::Add($Auto1,$Auto2);
 echo $importeDouble;
 $autocomparador=new Auto("NULL","NULL","NULL","NULL");
 echo "<br>Comparo el AUTO Nro1 con el AUTO Nro3:<br>";
 echo $autocomparador->Equals($Auto1,$Auto3);




Auto::MostrarAuto($Auto1);
Auto::MostrarAuto($Auto3);
Auto::MostrarAuto($Auto5);


$miGarage = new Garage("La estacion","Null");
$miGarage->Add($Auto1);
$bool=$miGarage->Equals($Auto2);
 if ($bool=="false") {
      $miGarage->Add($Auto2);
      }  
      else{

      	echo "<br>El auto ya está en el garage<br>";
      }  

      $bool2=$miGarage->Equals($Auto3);
 if ($bool2=="false") {
      $miGarage->Add($Auto3);
      }  
      else{

      	echo "<br>El auto ya está en el garage<br>";
      }  
      $bool3=$miGarage->Equals($Auto4);
 if ($bool3=="false") {
      $miGarage->Add($Auto4);
      }  
      else{

      	echo "<br>El auto ya está en el garage<br>";
      }   

echo "<br>---------------------Muestro mi GARAGE--------------------<br>";
 echo $miGarage->MostrarGarage();   
     //Remuevo Auto 1
 echo "<br>---------------------Remuevo Auto1--------------------<br>";
      $miGarage->Remove($Auto1);       
     
 echo $miGarage->MostrarGarage(); 
?>