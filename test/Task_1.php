<?php

/* used two for loops (I am not using PHP built in functions here)
* 1 loop - Iterates 3 times
* 2 loop - Iterates through the original array
*/


function repeat($arr){
  $newArray = array();
  for($i = 0; $i<3; $i++){
    for($j=0;$j<count($arr);$j++){
      $newArray[] = $arr[$j];
    }
  }
  return $newArray;
}

print_r(repeat([1,2,3]));

?>