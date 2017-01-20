<?php

//class with a function for sorting an array
class Sorting {

      public function sortingArray($array){

        //Going through the global array and separating it by its inner arrays
        foreach ($array as $element => $innerArray) {

            for($j = 0; $j < count($innerArray); $j ++) {
              for($i = 0; $i < count($innerArray)-1; $i ++){

                  //comparing the elements in each of the inner arrays
                  if($innerArray[$i] > $innerArray[$i+1]) {
                      $temp = $innerArray[$i+1];
                      $innerArray[$i+1] = $innerArray[$i];
                      $innerArray[$i] = $temp;
                  }
               }
            }

            //Printing sorted array
            echo  '<pre>';
                   print_r($innerArray);
            echo '</pre>';
         }
      }
}

?>
