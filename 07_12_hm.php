<?php

//1 uzduotis

// $name = 'Karolis';
// $lastName = 'Petraitis';
// $birthYear = 1990;
// $thisYear = 2020;

// $myYear = $thisYear - $birthYear;
// echo "As esu $name $lastName. Man yra $myYear metu";

//2 uzduotis

// $skaicius1 = rand(0,4);
// $skaicius2 = rand(0,4);
// if($skaicius1 === 0 || $skaicius2 === 0){
//     echo 'dalyba is 0 negalima';
// }
// elseif($skaicius1 > $skaicius2){
//     echo ($new1 = round($skaicius1 / $skaicius2,2));
// }elseif($skaicius2 > $skaicius1) {
//     echo ($new2 = round($skaicius2 / $skaicius1, 2));
// }

//3 uzduotis

// $skaicius1 = rand(0, 25);
// $skaicius2 = rand(0, 25);
// $skaicius3 = rand(0, 25);

// $vidurinisSkaicius = $skaicius1;

// if (($skaicius1 >= $skaicius2 && $skaicius1 <= $skaicius3) || ($skaicius1 <= $skaicius2 && $skaicius1 >= $skaicius3)) {
//     $vidurinisSkaicius = $skaicius1;
// } elseif (($skaicius2 >= $skaicius1 && $skaicius2 <= $skaicius3) || ($skaicius2 <= $skaicius1 && $skaicius2 >= $skaicius3)) {
//     $vidurinisSkaicius = $skaicius2;
// } else {
//     $vidurinisSkaicius = $skaicius3;
// }

// echo "Pirmas skaičius: " . $skaicius1 . "<br>";
// echo "Antras skaičius: " . $skaicius2 . "<br>";
// echo "Trečias skaičius: " . $skaicius3 . "<br>";
// echo "Kintamasis su vidurine reikšme: " . $vidurinisSkaicius;

//4 uzduotis

// $a = rand(1, 10);
// $b = rand(1, 10);
// $c = rand(1, 10);

// echo "Įvesti kraštinių ilgiai: a = $a, b = $b, c = $c<br>";

// if(($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a){
//     echo "Galima sudaryti trikampi is duotuju krastiniu: $a, $b, $c";
// }else{
//     echo 'Trikampis negalimas is duoduju krastiniu';
// }

//5 uzduotis

// $a = rand(0, 2);
// $b = rand(0, 2);
// $c = rand(0, 2);

// $nuliai = 0;
// $vienetai = 0;
// $dvejetai = 0;

// if($a === 0){
//     $nuliai++;
// }else if($a === 1){
//     $vienetai++;
// }else{
//     $dvejetai++;
// }

// if($b === 0){
//     $nuliai++;
// }else if($b === 1){
//     $vienetai++;
// }else{
//     $dvejetai++;
// }

// if($c === 0){
//     $nuliai++;
// }else if($c === 1){
//     $vienetai++;
// }else{
//     $dvejetai++;
// }
// echo "$a, $b, $c" . '<br>';
// echo "Pasikartojo nuliai: $nuliai" . '<br>';
// echo "Pasikartojo vienetai: $vienetai" . '<br>';
// echo "Pasikartojo dvejetai: $dvejetai" . '<br>';

//6 uzduotis

// $number = rand(1,6);

// echo "<h$number>Sveiki</h$number>";

//7 uzduotis

// $number1 = rand(-10, 10);
// $number2 = rand(-10, 10);
// $number3 = rand(-10, 10);

// $color1 = '';
// $color2 = '';
// $color3 = '';

// if ($number1 < 0) {
//     $color1 = 'green';
// } elseif ($number1 > 0) {
//     $color1 = 'blue';
// } else {
//     $color1 = 'red';
// }

// if ($number2 < 0) {
//     $color2 = 'green';
// } elseif ($number2 > 0) {
//     $color2 = 'blue';
// } else {
//     $color2 = 'red';
// }

// if ($number3 < 0) {
//     $color3 = 'green';
// } elseif ($number3 > 0) {
//     $color3 = 'blue';
// } else {
//     $color3 = 'red';
// }

// echo '<span style="color: ' . $color1 . ';">' . $number1 . '</span> ';
// echo '<span style="color: ' . $color2 . ';">' . $number2 . '</span> ';
// echo '<span style="color: ' . $color3 . ';">' . $number3 . '</span>';

//8 uzduotis

// $zvakiuKiekis = rand(5, 3000);
// $kaina = $zvakiuKiekis * 1; // Kaina be nuolaidų

// if ($kaina > 1000 && $kaina <= 2000) {
//     $nuolaida = $kaina * 0.03;
//     $kaina -= $nuolaida;
//     $nuolaidaProcentais = 3;
// } elseif ($kaina > 2000) {
//     $nuolaida = $kaina * 0.04;
//     $kaina -= $nuolaida;
//     $nuolaidaProcentais = 4;
// } else {
//     $nuolaida = 0;
//     $nuolaidaProcentais = 0;
// }

// echo "Perkama žvakių kiekis: $zvakiuKiekis\n";
// echo "Kaina be nuolaidų: $kaina EUR\n";
// echo "Taikyta nuolaida: $nuolaida EUR ($nuolaidaProcentais%)\n";

//9 uzduotis

// $number1 = rand(0, 100);
// $number2 = rand(0, 100);
// $number3 = rand(0, 100);
// $vidurkis = 3;

// if($number1 > 10 && $number1 < 90){
// }else{
//     $number1 = 0;
//     $vidurkis--;
// }

// if($number2 > 10 && $number2 < 90){
// }else{
//     $number2 = 0;
//     $vidurkis--;
// }

// if($number3 > 10 && $number3 < 90){
// }else {
//     $number3 = 0;
//     $vidurkis--;
// }

// if($number1 === 0 && $number2 === 0 && $number3 === 0){
//     echo 'Dalyba is nulio negalima';
// }else{
//     $rez = floor(($number1 + $number2 + $number3) / $vidurkis);
// }

// echo "$number1, $number2, $number3, $vidurkis <br>";
// echo 'Triju skaiciu aritmetinis vidurkis yra:' .$rez;

//10 uzduotis

$valandos = rand(1,24);
$minutes = rand(1,59);
$sekundes = rand(1,59);
$number = rand(0,300);

echo "Laikrodis: $valandos:$minutes:$sekundes";

echo '<br>';
echo $number;
$isMin = floor($number / 60);
$liekana = $number % 60;
echo '<br>';
echo $liekana;
echo '<br>';
echo $isMin;

if($isMin > 0){
    $minutes = $isMin + $minutes;
    if($minutes <= 59){
   }else{
    $minutes = $minutes - 59;
    $valandos++;
   }
}

if($sekundes <= 59){
    $sekundes += $liekana;
    if($sekundes <=59){
    }else{
    $sekundes = $sekundes - 59;
    $minutes++;
    }
}
echo '<br>';
echo "Laikrodis: $valandos:$minutes:$sekundes";