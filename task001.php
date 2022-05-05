<h1>1. Kintamieji ir sąlygos</h1>

<h2>1.</h2>

<?php
$BR = '<br>';

$vardas = 'Tomaš';
$pavarde = 'Urinovič';
$gimimoMetai = 1990;
$metai = 2022;
$manoMetai = $metai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $manoMetai metai.";

?>

<h2>2.</h2>

<?php

$firstRandomNumber = rand(1, 4);
$secondRandomNumber = rand(1, 4);

if ($firstRandomNumber > $secondRandomNumber) {
    echo round($firstRandomNumber / $secondRandomNumber, 2);
} else {
    echo round($secondRandomNumber / $firstRandomNumber, 2);
}

?>

<h2>3.</h2>

<?php

$first = rand(0, 25);
$second = rand(0, 25);
$third = rand(0, 25);


if ($first > $second && $first < $third
    || $first < $second && $first > $third)
    echo $first;

if ($second > $first && $second < $third
|| $second < $first && $second > $third)
    echo $second;

if ($third > $first && $third < $second
|| $third < $first && $third > $second)
    echo $third;

?>

<h2>4.</h2>

<?php

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Taip, trikampi sudaryti galima.";
} else {
    echo "Ne, trikampio sudaryti negalima.";
}

?>

<h2>5.</h2>

<?php

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);


echo $a;
echo $BR;
echo $b;
echo $BR;
echo $c;
echo $BR;
echo $d;
echo $BR;

?>

<h2>6.</h2>

<?php

$random = rand(1, 6);

echo htmlspecialchars("<h$random>$random</h$random>");

?>

<h2>7.</h2>

<?php

$random = rand(-10, 10);
echo rand($random);
echo $BR;
echo rand($random);
echo $BR;
echo $random;
echo $BR;