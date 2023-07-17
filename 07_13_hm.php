<!-- Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą. -->

<?php

$vardas = 'Jonas';
$pavarde = 'Jonaitis';

if(strlen($vardas) > strlen($pavarde)){
    echo "$pavarde";
}else {
    echo "$vardas";
}

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

echo '<br>';
echo strtoupper("$vardas");
echo '<br>';
echo strtolower("$pavarde");

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$treciasStringas = "$vardas[0]. $pavarde[0].";
echo '<br>';
echo $treciasStringas;

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas2 = substr('Petras', 3);
$pavarde2 = substr('Petraitis', 6);
$treciasStringas2 = "$vardas2, $pavarde2";

echo '<br>';
echo "Petras Petraitis nuo galo: $treciasStringas2";

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$stringas = 'An American in Paris';
$stringas = preg_replace("[A|a]", '*', $stringas);
echo '</br>';
echo $stringas;

// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$stringas2 = 'An American in Paris';
$counta = substr_count($stringas2, 'A');
$countA = substr_count($stringas2, 'a');
echo '</br>';
echo $counta + $countA;     

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$vowels = 'An American in Paris';
$vowels = preg_replace('#[aeiou\s]+#i', '', $vowels);

$vowels1 = 'Breakfast at Tiffany\'s';
$vowels1 = preg_replace('#[aeiou\s]+#i', '', $vowels1);

$vowels2 = '2001: A Space Odyssey';
$vowels2 = preg_replace('#[aeiou\s]+#i', '', $vowels2);

$vowels3 = 'It\'s a Wonderful Life';
$vowels3 = preg_replace('#[aeiou\s]+#i', '', $vowels3);

echo'<br>';
echo $vowels;
echo'<br>';
echo $vowels1;
echo'<br>';
echo $vowels2;
echo'<br>';
echo $vowels3;

// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$episode = 'Star Wars: Episode '.$episodeNum = str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo'<br>';
echo $episode;
echo'<br>';
echo $episodeNum;

// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$arejus = explode(' ', 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood');
$arejus2 = explode(' ', 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale');
$kiek = 0;

for($i = 0; $i < count($arejus2); $i++){
    if(strlen($arejus2[$i]) >=5){
        $kiek++;
    }
}

echo '<br>';
echo $kiek;

// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$raides = 'abcdefghijklmnopqrstuvwxyz';
$naujasStringas = '';

for($i = 0; $i < 3; $i++){
        $randomIndex = mt_rand(0, strlen($raides) - 1);
        $naujasStringas .= $raides[$randomIndex];
}

echo '<br>';
echo $naujasStringas;