 <?php
     
        $num=[];
        $total=0;
        $impar=1;


        echo"RECORRIDO FOR:<br>";
        for ($a=0;$a<10;$a++)
        {
              $num[$a]=$impar;
               echo ($impar."<br>");
              $impar=$impar+2;
        }
        echo"RECORRIDO FOREACH:<br>";
        foreach ($num as $impar ) {
        	echo ($impar."<br>");
        }
        
        $i=0;
        echo"RECORRIDO WHILE:<br>";
        while ($i<10) {
              echo($num[$i]."<br>");
        	  $i=$i+1;
        	  
        }

      var_dump($num);

?>