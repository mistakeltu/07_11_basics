<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

// $masyvas = [];
// foreach(range(1,10) as $_){
//     $tarpinis = [];
//     foreach(range(1,5) as $_){
//         $tarpinis[] = rand(5,25);
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);

//a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;

// $masyvas = [];
// $kiek10 = 0;
// foreach(range(1,10) as $_){
//     $tarpinis = [];
//     foreach(range(1,5) as $key => $value){
//         $tarpinis[] = rand(5,25);
//         if($tarpinis[$key] > 10){
//             $kiek10++;
//         }
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);
// echo '<br>';
// echo $kiek10;

//b) Raskite didžiausio elemento reikšmę;

// $masyvas = [];
// $max = 0;
// foreach(range(1,10) as $_){
//     $tarpinis = [];
//     foreach(range(1,5) as $key => $value){
//         $tarpinis[] = rand(5,25);
//         if($max < $tarpinis[$key]){
//             $max = $tarpinis[$key];
//         }
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);
// echo '<br>';
// echo $max;

//c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

// $masyvas = [];
// $sumOfOnes = 0;
// $sumOfTwos = 0;
// $sumOfThrees = 0;
// $sumOfFours = 0;
// $sumOfZeros = 0;

// foreach(range(1,10) as $_){
//     $tarpinis = [];
//     foreach(range(1,5) as $key => $value){
//         $tarpinis[] = rand(0,1);
//         if($key === 0){
//             $sumOfZeros += $tarpinis[$key];
//         }
//         if($key === 1){
//             $sumOfOnes += $tarpinis[$key];
//         }
//         if($key === 2){
//             $sumOfTwos += $tarpinis[$key];
//         }
//         if($key === 3){
//             $sumOfThrees += $tarpinis[$key];
//         }
//         if($key === 4){
//             $sumOfFours += $tarpinis[$key];
//         }
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);
// echo '<br>';
// echo $sumOfOnes;
// echo '<br>';
// echo $sumOfTwos;
// echo '<br>';
// echo $sumOfThrees;
// echo '<br>';
// echo $sumOfFours;
// echo '<br>';
// echo $sumOfZeros;

//d) Visus antro lygio masyvus “pailginkite” iki 7 elementų

// $masyvas = [];

// foreach(range(0,1) as $_){
//     $mini[] = rand(0,1);   
// }

// foreach(range(1,10) as $key => $value){
//     $tarpinis = [];
//     foreach(range(1,5) as $key => $value){
//         $tarpinis[] = rand(5,25);
//     }
//     array_push($tarpinis, rand(5,25), rand(5,25));
//     $masyvas[] = $tarpinis;
// }


// echo '<pre>';
// print_r($masyvas);
// echo '<br>';

//e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

// $masyvas = [];
// $sums = [];

// foreach(range(1,10) as $key => $value){
//     $tarpinis = [];
//     foreach(range(1,5) as $key => $value){
//         $tarpinis[] = rand(5,25);
//     }
//     $masyvas[] = $tarpinis;
// }

// foreach($masyvas as $key => $miniArr){
//     $suma = 0;
//     foreach($miniArr as $numbers){
//         $suma += $numbers;
//     }
//     $sums[] = $suma;
// }



// echo '<pre>';
// print_r($masyvas);
// echo '<br>';
// // var_dump($suma);
// echo '<br>';
// echo '<pre>';
// print_r($sums);

//3) Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

// $masyvas = [];
// $letters = range('A', 'Z');

// foreach(range(1,10) as $key => $value){
//     $tarpinis = [];
//     foreach(range(rand(2,20), rand(2,20)) as $key => $value){
//         $tarpinis[] = $letters[rand(0,25)];
//         sort($tarpinis);
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);

//4) Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

// $masyvas = [];
// $letters = range('A', 'Z');
// $sortedMasyvas = [];

// foreach(range(1,10) as $key => $value){
//     $tarpinis = [];
//     foreach(range(rand(2,20), rand(2,20)) as $key => $value){
//         $tarpinis[] = $letters[rand(0,25)];
//     }
//     sort($tarpinis);
//     $masyvas[] = $tarpinis;
//     sort($masyvas);
// }


// foreach ($masyvas as $key => $arr) {
//     $hasK = false;
//     foreach ($arr as $raides) {
//         if ($raides === 'K') {
//             $hasK = true;
//             break;
//         }
//     }

//     if ($hasK) {
//         array_unshift($sortedMasyvas, $arr); 
//     } else {
//         $sortedMasyvas[] = $arr;
//     }
// }

// foreach ($sortedMasyvas as $key => $arr) {
//     echo '<pre>';
//     print_r($arr);
// }
// echo '<pre>';
// print_r($arr);
// echo '<br>';
// echo '<pre>';
// print_r($minToMax);

//5) Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

// $masyvas = [];


// foreach(range(0,30) as $key => $value){
//     $tarpinis = [];
//     foreach(range(0,1) as $key => $value){
//         $tarpinis[] = [
//             'user_id' => rand(1,1000000), 
//             'place_in_row' => rand(1,100)
//         ];
//     }
//     $masyvas[] = $tarpinis;
// }

// echo '<pre>';
// print_r($masyvas);
// echo '<br>';

//6) Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
//a)

$masyvas = [];

foreach(range(0,30) as $key => $value){
    $tarpinis = [];
    foreach(range(0,1) as $key => $value){
        $user_id = rand(1,1000000);
        $place_in_row = rand(1,100);
        $tarpinis[] = [
            'user_id' => $user_id, 
            'place_in_row' => $place_in_row
        ];
    }
    $masyvas[] = $tarpinis;
}

$user_ids = [];
$place_in_rows = [];

foreach ($masyvas as $key => $value) {
    foreach ($value as $key => $masyvs) {
        $user_ids[] = $masyvs['user_id'];
    }
}

foreach ($masyvas as $key => $value) {
    foreach ($value as $key => $masyvs) {
        $place_in_rows[] = $masyvs['place_in_row'];
    }
}

rsort($place_in_rows);
sort($user_ids);

$sorted_user_ids = [];
foreach ($user_ids as $user_id) {
    foreach ($masyvas as $value) {
        foreach ($value as $masyvs) {
            if ($masyvs['user_id'] === $user_id) {
                $sorted_user_ids[] = $masyvs;
                break;
            }
        }
    }
}

$sorted_place_in_row = [];
foreach ($place_in_rows as $place_in_row) {
    foreach ($masyvas as $value) {
        foreach ($value as $masyvs2) {
            if ($masyvs2['place_in_row'] === $place_in_row) {
                $sorted_place_in_row[] = $masyvs2;
                break;
            }
        }
    }
}

// foreach ($place_in_rows as $key => $value) {
//     echo '<pre>';
//     print_r($value);
// }


//b)

$sorted_Masyvas = array_merge($sorted_user_ids, $sorted_place_in_row);

// foreach ($sorted_Masyvas as $key => $value) {
    // echo '<pre>';
    // print_r($sorted_place_in_row);
    // echo '<pre>';
    // print_r($sorted_user_ids);
// }

//7) Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

// foreach ($sorted_place_in_row as $key => $value) {
//     echo '<pre>';
//     print_r($value);
// }
$naujas = [];

foreach ($masyvas as $key => $value) {
    foreach(range(0,1) as $key => $value){
        $labas1 = rand(1,1000000);
        $labas2 = rand(1,100);
        $naujas[] = [
            'labas' => $labas1, 
            'labas2' => $labas2
        ];
    }
    $masyvas[] = $naujas;
}

$duNauji = [];

$duNauji = array_merge($naujas, $sorted_place_in_row);


echo '<pre>';
print_r($masyvas);