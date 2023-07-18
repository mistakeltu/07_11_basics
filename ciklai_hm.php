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

//5 uzduotis
//a)
// for($i = 0; $i < 3; $i++){
//     $moneta = rand(0,1);
//     $kiekHerbas = 0;
//     if($moneta === 0){
//         echo 'Skaicius';
//     }else {
//         echo 'Herbas';
//         break;
//     }
// }

echo '<br>';
echo '<br>';

//b)
// $kiekHerbas = 0;
// for($i = 0; $i < 3; $i++){
//     $moneta = rand(0,1);
//     if($moneta === 0){
//         echo 'Skaicius';
//     }else if ($moneta === 1) {
//         echo 'Herbas';
//         $kiekHerbas++;
//         if($kiekHerbas === 3){
//             break;
//         }
//     }
// }

//c)

$isEiles = 0;

for($i = 0; $i < 10; $i++){
    $moneta = rand(0,1);
    if($moneta === 0){
        echo 'Skaicius';
        $isEiles = 0;
    }else if ($moneta === 1) {
        echo 'Herbas';
        $isEiles++;
        if($isEiles === 3){
            break;
        }
    }
}

echo '<br>';
echo '<br>';

//7

$petriux = rand(10,20);
$kaziux = rand(5,25);

$taskai = 0;
$ptaskai = 0;
$ktaskai = 0;

while($ptaskai <= 222 && $ktaskai <= 222){
    $ptaskai += $petriux;
    $ktaskai += $kaziux;

    if($ptaskai >= 222 && $ktaskai >= 222){
        $winner = 'Lygiosios';
    }else if($ptaskai >= 222){
        $winner = 'Petriux';
    }else {
        $winner = 'Kaziux';
    }
}

echo "Kaziux taskai: $ktaskai <br>";
echo "Petriux taskai: $ptaskai <br>";
echo "Partija laimejo: $winner";

//8

// $dalmuo = 0;
// echo '<h1 style="line-height:16px;">';
// for ($i = 0; $i < 21; $i++) {
//     echo '<div>';
//     for ($i2 = 0; $i2 < 21; $i2++) {
//         if ($i === $i2 || $i === (21 - 1 - $i2)){ 
//             echo '<span style="color: black;">*</span>';
//         }else {
//             echo '<span style="">*</span>';
//         }
//     }
//     echo '</div>';

// }
// echo '</h1>';

//10

//a)
$ilgis = 85;
$smugiai = 0;

for($i = 1; $i < 5; $i++){
    $liko = $ilgis;
    do{
        $smugis = rand(5,20);
        $smugis = rand(0,1) ? $smugis : 0;
        $liko -=$smugis;
        $smugiai++;
    }while($ilgis > 0);

    echo "<h1>Smugiu: $smugiai</h1>";
}

$vinis = 85;
$smugiai = 0;

for ($i = 0; $i < 5; $i++) {
    $liko = $vinis;
    do {
        $smugis = rand(20, 30);
        $smugis = rand(0, 1) ? $smugis : 0;
        $liko -= $smugis;
        $smugiai++;
    } while ($liko > 0);
    echo "<h1>Smugiu: $smugiai</h1>";
}
