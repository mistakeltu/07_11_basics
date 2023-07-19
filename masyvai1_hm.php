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

//3

foreach(range('A', 'D') as $key => $value ){
    $masyvas[] = $value;
}



echo '<pre>';
print_r($masyvas);