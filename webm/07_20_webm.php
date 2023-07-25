<?php

$img = file_get_contents(__DIR__ . '/space.jpg');

header('Content-Type: image/jpeg');

echo $img;