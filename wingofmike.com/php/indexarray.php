<?php
//indexed array
$program= array("PHP", "HTML", "JAVASCRIPT");
//echo count($program);
//
$arrlen=count($program);
rsort($program);
for($i=0; $i<$arrlen; $i++){
  echo $program[$i];  
  echo "<br>";
} 
?>