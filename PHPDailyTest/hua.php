<?php
function flower(){
    $m=999;
    $n=100;
    $arr=[];
    for ($i=$n;$i<=$m;$i++){
        $g=$i%10;
        $s=floor($i/10%10);
        $b=floor($i/100%10);
        if ($b*$b*$b+$s*$s*$s+$g*$g*$g == $i){
            $arr[]=$i;
        }
    }
    return $arr;
}
var_dump(flower());
?>