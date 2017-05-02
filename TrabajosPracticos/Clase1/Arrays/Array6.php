 <?php
     
        $num=[];
        $total=0;

        for ($a=0;$a<5;$a++)
        {
          $num[$a]=rand(1,10);
        }
         var_dump($num);
         echo("<br>");
        $min = $num[0];
        $max = $num[0];
        
        for ($a=0;$a<5;$a++){
            echo "Valor de la posición".$a." = ".$num[$a]."<br>";
            $total+=$num[$a];
            $min = $num[$a]<$min ? $num[$a] : $min;
            $max = $num[$a]>$max ? $num[$a] : $max;
        }
 

        $media=$total/5;

        
        if($media < 6)
        {
            echo ("<br>Valor de la nota media:".$media."  es menor a 6<br>");

        }
        elseif ($media > 6) {
            
            echo ("<br>Valor de la nota media:".$media."  es mayor a 6<br>");
        }
        else
        {
            echo ("<br>Valor de la nota media:".$media."  es igual a 6<br>");
        }

       


        echo "Valor minimo".$min."<br />";
        echo "Valor maximo ".$max."<br />";


        ?>
