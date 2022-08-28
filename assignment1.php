   <html>
      <head>
         <style>
            table {
               border-style: solid;
               border-width: 2px;
               border-color: lightblue;
            }
         </style>
      </head>
      <body>  
         <?php
            function getArrLength($arr) {
               $counter = 0;
               foreach ($arr as $element) {  
                  $counter++;
               }
               return $counter;
            }
            $counter = 1;
            $arr_val = array(2,3,5,7);
            while ($counter <= 1000) {
               if ($counter != 1 && $counter % 2 != 0 && $counter % 3 != 0 && $counter % 5 != 0 && $counter % 7 != 0) {
                  array_push($arr_val, $counter);
               }
               $counter++;
            }
            echo "<table border='1'>";
            $emptyArray = array();
            $count = 0;
            while (getArrLength($arr_val)>0) {
            $tempArray = array_slice($arr_val,-getArrLength($arr_val),11);    
               echo "<tr>";
               foreach ($tempArray as $val) {
                  echo "<td>".$val."</td>";
               }
               echo "</tr>";
               $arr_val = array_slice($arr_val,11);
            }
            ?>
      </body>
   </html> 
   <?php
   
   $sum = 0;
   $num = 1234;
   $temp = $num;
      for ($i =0; $i<=strlen((int)$num);$i++)  
      {  
         $rem=$num%10;  
         $sum = $sum + $rem;  
         $num=$num/10;  
      }
      $revnum = 0;
      while ($temp >= 1)  {  
         $rem = $temp % 10;  
         $revnum = ($revnum * 10) + $rem;  
         $temp = ($temp / 10);
      }  
      echo "Sum of digits $num is $sum \nReverse: $revnum"; 
   ?>
