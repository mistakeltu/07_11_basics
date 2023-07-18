<?php

//1 uzduotis
for($i = 1; $i <= 400; $i++){
    echo '<span>*</span>';
    if($i % 50 === 0){
        echo '<br>';
    }
}

//2 uzduotis
$kiek = 0;
for($i = 0; $i < 300; $i++){
    $random = rand(0,300);
    if($random > 275){
        echo "<span style=\"color: red;\">$random, </span>";
    }else {
        echo "$random, ";
    }
    if($random > 150){
        $kiek++;
    }
}
echo '<br>';
echo '<br>';
echo "Kiek didesniu nei 150: $kiek";

//3 uzduotis

$random = rand(3000,4000);
$be = '';

for($i = 1; $i <= $random; $i++){
    if($i % 77 === 0){
        if ($be !== '') {
            $be .= ', ';
        }
        $be .= $i;
    }
}

echo '<br>';
echo '<br>';
echo $be;

//4 uzduotis
$dalmuo = 0;
echo '<h1 style="line-height:16px;">';
for ($i = 0; $i < 100; $i++) {
    $dalmuo++;
    echo '<div>';
    for ($i2 = 0; $i2 < 100; $i2++) {
        if ($i === $i2 || $i === (100 - 1 - $i2)){ 
            echo '<span style="color: skyblue;">*</span>';
        }else {
            echo '<span style="">*</span>';
        }
    }
    echo '</div>';

}
echo '</h1>';