<?php
$num=3;

function numRomano($a){
    if($a==0){
        $res=0;
    }elseif($a>10){
        $res="mayor a 10";
    }elseif($a==10){
        $res="X";
    }elseif($a==9){
        $res="IX";
    }elseif($a>=5){
        $res="V";
        $a=$a-5;
        for($i=$a;$i>0;$i--){
            $res=$res . "I";
        }
    }elseif($a==4){
        $res="IV";
    }elseif($a>0){
        $res="";
        for($i=$a;$i>0;$i--){
            $res=$res . "I";
        }
    }elseif($a<0){
        $res="menor a 0";
    }
    return $res;
}
$res=numRomano($num);
echo "$res";
?>