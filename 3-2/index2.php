<?php
$fruits = ["りんご" =>100,"みかん" =>50,"もも" =>300];
$num = [3,3,10];
$i = 0;



function gettotal($tanka,$kosuu){
    $total = $tanka * $kosuu;
    return $total;

}


foreach ($fruits as $key => $value) {
    $goukei = gettotal($value, $num[$i]);
    echo $key."は".$goukei."円です。<br>";
    $i++;
}

?>