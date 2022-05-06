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

$firstRandomNumber = rand(0, 4);
$secondRandomNumber = rand(0, 4);

if ($firstRandomNumber === 0 || $secondRandomNumber === 0) {
    echo 'Is nulio dalyba negalima';
}else if ($firstRandomNumber > $secondRandomNumber) {
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

    if ($first === $second || $first === $third || $second === $third)
    echo 'Lygus 2 skaiciai'

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

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if($a === 0) {
    $nuliai += 1;
}
if($b === 0) {
    $nuliai += 1;
}
if($c === 0) {
    $nuliai += 1;
}
if($d === 0) {
    $nuliai += 1;
}

if($a === 1) {
    $vienetai += 1;
}
if($b === 1) {
    $vienetai += 1;
}
if($c === 1) {
    $vienetai += 1;
}
if($d === 1) {
    $vienetai += 1;
}

if($a === 2) {
    $dvejetai += 1;
}
if($b === 2) {
    $dvejetai += 1;
}
if($c === 2) {
    $dvejetai += 1;
}
if($d === 2) {
    $dvejetai += 1;
}

echo $a;
echo $BR;
echo $b;
echo $BR;
echo $c;
echo $BR;
echo $d;
echo $BR;
echo $BR;
echo "Nuliu kiekis = $nuliai;";
echo $BR;
echo "Vienetu kiekis = $vienetai;";
echo $BR;
echo "Dvejetu kiekis = $dvejetai;";

?>

<h2>6.</h2>

<?php

$random = rand(1, 6);

echo htmlspecialchars("<h$random>$random</h$random>");

?>

<h2>7.</h2>

<?php

$random1 = rand(-10, 10);
$random2 = rand(-10, 10);
$random3 = rand(-10, 10);

if ($random1 < 0) {
    echo "<i style='color: green;'>$random1</i>";
}
if ($random1 === 0) {
    echo "<i style='color: red;'>$random1</i>";
}
if ($random1 > 0) {
    echo "<i style='color: blue;'>$random1</i>";
}

echo $BR;

if ($random2 < 0) {
    echo "<i style='color: green;'>$random2</i>";
}
if ($random2 === 0) {
    echo "<i style='color: red;'>$random2</i>";
}
if ($random2 > 0) {
    echo "<i style='color: blue;'>$random2</i>";
}

echo $BR;

if ($random3 < 0) {
    echo "<i style='color: green;'>$random3</i>";
}
if ($random3 === 0) {
    echo "<i style='color: red;'>$random3</i>";
}
if ($random3 > 0) {
    echo "<i style='color: blue;'>$random3</i>";
}

?>

<h2>8.</h2>

<?php

$zvakes = rand(5, 3000);
$kaina = 1;


if($zvakes >= 1000 && $zvakes < 2000) {
    $kaina = 1 - 0.03;
}
if($zvakes >= 2000 ) {
    $kaina = 1 - 0.04;
}

$suma = $zvakes * $kaina;
echo "Zvakes = $zvakes";
echo $BR;
echo "Kaina = $kaina \xE2\x82\xAc";
echo $BR;
echo "Suma = $suma \xE2\x82\xAc";

?>

<h2>9.</h2>

<?php

$first = rand(0, 100);
$second = rand(0, 100);
$third = rand(0, 100);
$vidurkis = round(($first + $second + $third) / 3);

echo $BR;

echo "Pirmas skaicius = $first;";
echo $BR;
echo $BR;
echo "Antras skaicius = $second;";
echo $BR;
echo $BR;
echo "Trecias skaicius = $third;";
echo $BR;
echo $BR;
echo "Vidurkis = $vidurkis;";

?>

<h2>10.</h2>

<?php

$valandos = rand(1, 24);
$minutes = rand(0, 59);
$sekundes = rand(0, 60);

$papildomosSekundes = rand(0, 300);

$minutesPoSekundziuPridejimo = floor($papildomosSekundes / 60) ;
$likusiosSekundes = $papildomosSekundes - (60 * $minutesPoSekundziuPridejimo);

$sec = $sekundes + $likusiosSekundes;
$min = $minutes + $minutesPoSekundziuPridejimo;
$h = $valandos;

if ($sec > 59) {
    $min += 1;
    $sec -= 60;
}

if ($min > 59) {
    $h += 1;
    $min -= 60;
}

echo "Esamas laikrodis --------------- $valandos h : $minutes m : $sekundes s";
echo $BR;
echo $BR;
echo "Pridedamu sekundziu skaicius = $papildomosSekundes s";
echo $BR;
echo $BR;
echo "Laikrodis po sekundziu pridejimo -------- $h h : $min m : $sec s";

?>

<h2>11.</h2>

<?php

$skaicius1 = rand(1000, 9999);
$skaicius2 = rand(1000, 9999);
$skaicius3 = rand(1000, 9999);
$skaicius4 = rand(1000, 9999);
$skaicius5 = rand(1000, 9999);
$skaicius6 = rand(1000, 9999);

$pirmas = '1';
$antras = '2';
$trecias = '3';
$ketvirtas = '4';
$penktas = '5';
$sestas = '6';

if ($skaicius1 < $skaicius2 
    && $skaicius1 > $skaicius3 
    && $skaicius1 > $skaicius4 
    && $skaicius1 > $skaicius5 
    && $skaicius1 > $skaicius6) {
    $pirmas = $skaicius1;
} 
if ($skaicius1 > $skaicius2 
    && $skaicius1 < $skaicius3 
    && $skaicius1 > $skaicius4 
    && $skaicius1 > $skaicius5 
    && $skaicius1 > $skaicius6) {
    $antras = $skaicius1;
} 
if ($skaicius1 > $skaicius2 
    && $skaicius1 > $skaicius3 
    && $skaicius1 < $skaicius4 
    && $skaicius1 > $skaicius5 
    && $skaicius1 > $skaicius6) {
    $tracias = $skaicius1;
} 
if ($skaicius1 > $skaicius2 
    && $skaicius1 > $skaicius3 
    && $skaicius1 > $skaicius4 
    && $skaicius1 < $skaicius5 
    && $skaicius1 > $skaicius6) {
    $ketvirtas = $skaicius1;
} 
if ($skaicius1 > $skaicius2 
    && $skaicius1 > $skaicius3 
    && $skaicius1 > $skaicius4 
    && $skaicius1 > $skaicius5 
    && $skaicius1 < $skaicius6) {
    $penktas = $skaicius1;
} 
if ($skaicius1 > $skaicius2 
    && $skaicius1 > $skaicius3 
    && $skaicius1 > $skaicius4 
    && $skaicius1 > $skaicius5 
    && $skaicius1 > $skaicius6) {
    $sestas = $skaicius1;
}

echo $BR;
echo $skaicius1;
echo $BR;
echo $skaicius2;
echo $BR;
echo $skaicius3;
echo $BR;
echo $skaicius4;
echo $BR;
echo $skaicius5;
echo $BR;
echo $skaicius6;
echo $BR;
echo $BR;


echo "$pirmas $antras $trecias $ketvirtas $penktas $sestas";

