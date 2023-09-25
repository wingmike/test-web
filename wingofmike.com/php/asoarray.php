<?php
//associative array
$age=array("Natnael"=>"15","Gelila"=>"14");
//echo $age["Gelila"];
//asort($age);
krsort($age);
foreach($age as $x=>$x_value){
    echo $x.$x_value;
    echo "<br>";
}
?>