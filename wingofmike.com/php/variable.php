<?php
/*$txt="Hello world";
$y=35;
echo $txt;
echo "</br>";
echo $y;
$y=60;//global variable
function v_scop(){
    global $y;
    $x=45;//local variable
    //echo $x;
    echo $y;
}
v_scop();*/

function st(){
    static $z=1;
    echo $z;
    $z++;
}
st();
echo "</br>";
st();
echo "</br>";
st();
?>