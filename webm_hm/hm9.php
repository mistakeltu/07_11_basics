<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->

<?php
// session_start();
$color = 'black';
$color = $_SERVER['REQUEST_METHOD'] === 'POST' ? 'white' : 'black';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?= $color ?>;">
    <form action="" method="post">
        <?php foreach (range(rand(3, 10), rand(3, 10)) as $_) : ?>
            <div>
                <?php
                $arr = ['A', 'B', 'C'];
                $new = array_rand($arr);
                $letters = $arr[$new];
                ?>
                <input type="checkbox" name="adsas">
                <label for="adsas"><?= $letters ?></label>
            </div>
        <?php endforeach ?>
        <button type="submit">Submit</button>
    </form>
</body>

</html>