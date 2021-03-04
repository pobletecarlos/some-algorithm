<?php 

function FirstFactorial($num) {
  if($num == 1)
    return $num;
  return $num * FirstFactorial($num - 1);
}
   
echo FirstFactorial(100);  

?>
