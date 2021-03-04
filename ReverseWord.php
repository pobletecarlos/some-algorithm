<?php 

function FirstReverse($str) {
  $result = '';
  $array = str_split($str);

  for($i = sizeof($array); $i >= 0; $i--){
      $result .= $array[$i]; 
  }
  return $result;
}
   
// keep this function call here  
echo FirstReverse("Hello Word");  

?>
