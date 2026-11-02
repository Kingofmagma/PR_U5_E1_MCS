<?php

function dameNumero($i,$nums,$can){
   $num=rand(1,$can);
   if($i==0){
    $nums[0]=$num;
    return $num;
    echo "b";
   }else{
   for($j=0;$j<$i;$j++){
        echo "P i=$i j=$j num=$num <br>";
        if($nums[$j]==$num){
            $num=rand(1,$can);
            echo "Se repite numero";
            $j=0;
        }

   }
    echo "S i=$i j=$j num=$num <br>";
        if($i==$j){
            $nums[$i]=$num;
        }
        return $num;
   }

}
$nums=[];
$can=59;
for($i=0;$i<6;$i++){
$nums[$i]=dameNumero($i,$nums,$can);
print_r($nums);
}

?>