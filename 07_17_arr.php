<?php

echo '<pre>';
$spintele = [
    'bebras',
     5 => 'meska', 
    'mamutas',
    'sernas',
    'pieva' => 'sernas',
    'sernas',
    'sernas',
    50 => 'avis',
    'sernas',
    'laukas' => 'sernas',
    'sernas',
    'gaidys',
];


// foreach($spintele as $key => $value){
//     if($value == 'meska'){
//         $spintele[$key] = 'suo';
//     }
// }
print_r($spintele); //nerusiuota spintele
echo '<br>';

usort($spintele, function($a, $b){
    return strlen($a) <=> strlen($b);
});

print_r($spintele);
echo '<br>';

// for($i = 1; $i <= 5; $i++){
//     echo $i;
// }

// echo '<br>';
// print_r(range(1,5));

// foreach(range(1,5) as $value){
//     echo $value;
// }