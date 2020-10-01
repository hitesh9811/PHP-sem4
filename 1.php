<?php

$a1=10;
$b1=12;
$c1=15;

if($a1>=$b1){
  if($a1>=$c1){ echo $a1; }
  else { echo $c1; }
}
else{
  if($b1>=$c1){ echo $b1; }
  else { echo htmlentities($c1); }
}

?>
