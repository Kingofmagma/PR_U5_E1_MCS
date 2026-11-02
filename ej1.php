<?php
$edad1=8;
$edad2=7;

function diferenciaEdad($a, $b){
    if($a>$b){
        $res=$a-$b;
    }else{
        $res=$b-$a;
    }
    return $res;
}

$res=diferenciaEdad($edad1,$edad2);

echo "la diferencia de edad es $res";

?>