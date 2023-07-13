<h1>HTML</h1>
<?php



$b = 'c';
$c = 'rytas';

echo $$b;

$pirmas = 'antras';
$antras = 'bla bla';
echo $$pirmas;

$skaicius1 = rand(0,4);
$skaicius2 = rand(0,4);
if($skaicius1 === 0 || $skaicius2 === 0){
    echo 'dalyba is 0 negalima';
}
elseif($skaicius1 > $skaicius2){
    echo ($new1 = round($skaicius1 / $skaicius2,2));
}elseif($skaicius2 > $skaicius1) {
    echo ($new2 = round($skaicius2 / $skaicius1, 2));
}