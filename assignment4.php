
   <?php
      $flowers = array("Sunflower","Daisy","Pansy","Rose");
      function checkIfElementPresent($target , $arrayFind) {
         foreach ($arrayFind as $x => $val) {
            if ($target == $val) {
               return $x;
            }
            if ($x == count($arrayFind)-1 && $target != $val) {
               return -1;
            }
         }
      }
      echo checkIfElementPresent("Pansy",$flowers);
   ?> 
   <?php
      $numArrays = array(4,6,8,10,12,14,16);
      function binarySearchElem($key , $targetArray) {
         $lower = 0;
         $len = 0;
         foreach ($targetArray as $value) {
            $len++;
         }
         $upper = $len - 1;
         $mid =  floor(($lower + $upper)/2);
         if (in_array($key,$targetArray)) {
            while ($key != $targetArray[$mid]) {
               if ($targetArray[$mid] > $key) {
                  $mid = $upper - 1;
               }
               else if ($targetArray[$mid] < $key) {
                  $mid = $lower + 1;
               }
            }
            return "$key is present at $mid";
         }
         if (in_array($key,$targetArray) != true) {
            return "-1";
         }
      }
      echo binarySearchElem(10,$numArrays);
   ?>
   Question-3
   <?php
      $capitals = array(
         "Haryana"=>"Chandigarh",
         "Uttar Pradesh"=>"Lucknow",
         "Tamil Nadu"=>"Chennai",
         "Maharashtra"=>"Mumbai",
         "Bihar"=>"Patna"
      );

      function displayCapital($assocArray,$key) {
         foreach($assocArray as $elementkey => $key_val) {
            if ($key == $elementkey) {
               // echo "Capital Name => $key_val";
            }
         }
      }
      // echo displayCapital($capitals,"Uttar Pradesh");
      echo "\n".(ceil(13/5));
   ?>
