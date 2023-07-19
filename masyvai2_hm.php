<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

$masyvas = [];
foreach(range(1,10) as $_){
    $tarpinis = [];
    foreach(range(1,5) as $_){
        $tarpinis[] = rand(5,25);
    }
    $masyvas[] = $tarpinis;
}

echo '<pre>';
print_r($masyvas);