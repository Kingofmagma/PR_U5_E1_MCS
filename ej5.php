<?php
$char="patata";
$num=4;

function torre($char,$num){
    $j=1;
    for($i=$num;$i>0;$i--){
        $jj=$j;
        while($jj>0){
            echo "$char";
            $jj--;
        }
        echo"<br>";
        $j=$j+2;
    }
    
    $j=$j-4;
    for($i=$num;$i>0;$i--){
        $jj=$j;
        while($jj>0){
            echo "$char";
            $jj--;
        }
        echo"<br>";
        $j=$j-2;
    }
}
torre($char,$num);
?>