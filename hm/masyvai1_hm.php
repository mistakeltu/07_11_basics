<?php
//1 2a)
// $kiek = 0;
// foreach(range(0, 29) as $value){
//     $value = rand(5,25);
//     echo "$value ";
//     if($value > 10){
//         $kiek++;
//     }
// }
// echo '<br>';
// echo $kiek;

//2
//b)

// $max = 0;
// $maxIndex = 0;
// $arr = range(0, 29);

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

//     if($max < $value){
//         $max = $value;
//         $maxIndex = $key;
//     }

// }
// echo '<br>';
// echo '<br>';
// echo $maxIndex . '---->' . $max;

//c)

// $arr = range(0, 29);
// $sum = 0;
// $skaiciai = '';

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

//     if($value % 2 === 0){
//         $sum += $value;
//     }

// }
// echo '<br>';
// echo '<br>';
// echo $sum;

//e)

// $arr = range(0, 29);

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

// }

// echo '<br>';
// echo '<br>';
// $arr2 = range(1, 10);

// foreach($arr2 as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

// }

// echo '<br>';
// echo '<br>';

// echo '<pre>';
// print_r(array_merge($arr,$arr2));

//d

// $arr = range(0, 29);
// $sum = 0;

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");
//     $sum .= $value - $key . ' ';

// }
// echo '<br>';
// echo '<br>';
// echo $sum;

//f

// $arr = range(0, 29);
// $masyvas1 = [];
// $masyvas2 = [];

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

//     if($value % 2 === 0){
//         $masyvas1[$key] = $value;
//     }else {
//         $masyvas2[$key] = $value;
//     }
// }

// echo '<br>';
// echo '<br>';
// echo '<pre>';
// print_r($masyvas1);

// echo '<br>';
// echo '<br>';
// echo '<pre>';
// print_r($masyvas2);


//g)

// $arr = range(0, 29);
// $naujas = [];

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

//     if($key % 2 === 0 && $key >= 15){
//         $naujas[$key] = $arr[$value = 0];
//     }
// }

// echo '<br>';
// echo '<br>';
// echo '<pre>';
// print_r($naujas);

//h)

// $arr = range(0, 29);
// $min = [];
// $minKey = 999;

// foreach($arr as $key => $value){
//     $value = rand(5,25);
//     print_r(" $key ---> $value |");

//     if($value >= 10 && $key < $minKey){
//     $minKey = $key;
//     $min[$key] = $arr[$value]; 
//     }

// }

// echo '<br>';
// echo '<br>';
// echo '<pre>';
// print_r($min);

//i)

// foreach(range(1,30) as $_ ){
//     $masyvas[] = rand(5,25);
// }

// foreach($masyvas as $key => $value){
//     if($key % 2 === 0){
//         unset($masyvas[$key]);
//     }
// }

// echo '<pre>';
// print_r($masyvas);

//3-4
// $kiekA=0;
// $kiekB=0;
// $kiekC=0;
// $kiekD=0;
// $sortinimas =[];
// $masyvas = [];

// foreach(range(1,200) as $key => $value ){
//     $raide = range('A', 'D');
//     $value = $raide[rand(0,3)];
//     echo '<pre>';
//     print_r(" $key ---> $value |");
//     $masyvas[$key] = $value;
//     sort($masyvas);

//     if($value === 'A'){
//         $kiekA++;
//     }else if($value === 'B'){
//         $kiekB++;
//     }else if($value === 'C'){
//         $kiekC++;
//     }else{
//         $kiekD++;
//     }

// }

// echo '<br>';
// echo $kiekA;
// echo '<br>';
// echo $kiekB;
// echo '<br>';
// echo $kiekC;
// echo '<br>';
// echo $kiekD;
// echo '<br>';
// print_r($masyvas);

//5
// $pirmas = '';
// $antras = '';
// $trecias = '';
// $lygu = 0;
// $skirtingi = 0;
// $ats = '';
// $ats2 = '';

// foreach(range(1,3) as $key => $value ){

//     foreach(range(1,3) as $key => $value ){
//         $raide = range('A', 'D');
//         $value = $raide[rand(0,3)];
//         echo '<pre>';
//         print_r(" $key ---> $value ");

//         if($key === 0){
//             $pirmas .= $value;
//         }else if($key === 1){
//             $antras .= $value;
//         }else{
//             $trecias .= $value;
//         }
//     }
//     if($pirmas === $antras || $antras === $trecias || $pirmas === $trecias){
//         $lygu++;
//         if($lygu === 3){
//             $ats = 'Yra vienodu';
//         }else if($lygu === 0 || $lygu === 1 || $lygu === 2){
//             $ats2 = 'Visi skirtingi';
//         }
//     }

// }
// echo '<br>';
// echo $pirmas;
// echo '<br>';
// echo $antras;
// echo '<br>';
// echo $trecias;
// echo '<br>';
// echo $lygu;
// echo '<br>';
// echo $ats;
// echo '<br>';
// echo $ats2;

//6

// $masyvas1 = [];
// $masyvas2 = [];

// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);
    
//     while (in_array($randomNumber, $masyvas1)) {
//         $randomNumber = rand(100, 999);
//     }
    
//     $masyvas1[] = $randomNumber;
// }

// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);
    
//     while (in_array($randomNumber, $masyvas2)) {
//         $randomNumber = rand(100, 999);
//     }
    
//     $masyvas2[] = $randomNumber;
// }

// echo '<br>';
// echo '<pre>';
// print_r($masyvas1);
// echo '<br>';
// echo '<pre>';
// print_r($masyvas2);

//7

// $masyvas1 = [];
// $masyvas2 = [];

// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);  
//     $masyvas1[] = $randomNumber;
// }
// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);
//     $masyvas2[] = $randomNumber;
// }

// $masyvas3 = [];
// foreach($masyvas1 as $key => $value){
//     if(!in_array($value, $masyvas2)){
//         $masyvas3[$key] = $value;
//     }    
// }

// echo '<br>';
// echo '<pre>';
// print_r($masyvas1);
// echo '<br>';
// echo '<pre>';
// print_r($masyvas2);
// echo '<pre>';
// print_r($masyvas3);

//8

// $masyvas1 = [];
// $masyvas2 = [];

// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);  
//     $masyvas1[] = $randomNumber;
// }
// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);
//     $masyvas2[] = $randomNumber;
// }

// $masyvas3 = [];
// foreach($masyvas1 as $key => $value){
//     if(in_array($value, $masyvas2)){
//         $masyvas3[$key] = $value;
//     }    
// }

// echo '<br>';
// echo '<pre>';
// print_r($masyvas1);
// echo '<br>';
// echo '<pre>';
// print_r($masyvas2);
// echo '<pre>';
// print_r($masyvas3);

//9

// $masyvas1 = [];
// $masyvas2 = [];

// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);  
//     $masyvas1[] = $randomNumber;
// }
// foreach (range(1, 100) as $key => $value) {
//     $randomNumber = rand(100, 999);
//     $masyvas2[] = $randomNumber;
// }

// $masyvas3 = [];
// foreach($masyvas1 as $key => $indexas){ 
//     $masyvas3[$indexas] = $masyvas2[$key];
// }

// echo '<br>';
// echo '<pre>';
// print_r($masyvas1);
// echo '<br>';
// echo '<pre>';
// print_r($masyvas2);
// echo '<pre>';
// print_r($masyvas3);

//10

$masyvas = [];
$suma = 0;
foreach(range(1,10) as $key => $value){
    if($key < 2){
        $randomNumber = rand(5,25);
        $masyvas[] = $randomNumber;
        $suma += $randomNumber;
    }else if($key === 2){
        $masyvas[] = $suma;
    }else if($key <= 3){
        $masyvas[] = 2 * $suma;
    }else if($key <= 4){
        $masyvas[] = 4 * $suma;
    }else if($key <= 5){
        $masyvas[] = 8 * $suma;
    }else if($key <= 6){
        $masyvas[] = 16 * $suma;
    }else if($key <= 7){
        $masyvas[] = 32 * $suma;
    }else if($key <= 8){
        $masyvas[] = 48 * $suma;
    }else if($key <= 9){
        $masyvas[] = 72 * $suma;
    }
    else{
        $randomNumber = $key + 1;
        $masyvas[] = $randomNumber;
    }
}

echo '<pre>';
print_r($masyvas);
