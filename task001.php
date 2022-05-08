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
$vidurkis2 = 0;

if ($first < 10 && $second < 10 && $third < 10 
    || $first > 90 && $second > 90 && $third > 90 
    || $first < 10 && $second > 90 && $third < 10 
    || $first < 10 && $second < 10 && $third > 90
    || $first > 90 && $second < 10 && $third < 10
    || $first > 90 && $second > 90 && $third < 10
    || $first > 90 && $second < 10 && $third > 90) {
        $vidurkis2 = 0;
} else if($first < 10 && $second < 10 || $first > 90 && $second > 90 || $first < 10 && $second > 90 || $first > 90 && $second < 10) {
            $vidurkis2 = $third;
} else if($first < 10 && $third < 10 || $first > 90 && $third > 90 || $first < 10 && $third > 90 || $first > 90 && $third < 10) {
            $vidurkis2 = $second;
} else if($third < 10 && $second < 10 || $third > 90 && $second > 90 || $third < 10 && $second > 90 || $third > 90 && $second < 10) {
            $vidurkis2 = $first;
} else if($first < 10 || $first > 90) {
            $vidurkis2 = round(($second + $third) / 2);
} else if($second < 10 || $second > 90) {
            $vidurkis2 = round(($first + $third) / 2);
} else if($third < 10 || $third > 90) {
            $vidurkis2 = round(($first + $second) / 2);
} else if ($first > 10 || $first < 90 && $second > 10 || $second < 90 && $third > 10 || $third < 90) {
            $vidurkis2 = $vidurkis;
}

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
echo $BR;
echo $BR;
echo "Vidurkis2 = $vidurkis2;";

?>

<h2>10.</h2>

<?php

$valandos = rand(1, 24);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

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

$pirmas = 0;
$antras = 0;
$trecias = 0;
$ketvirtas = 0;
$penktas = 0;
$sestas = 0;

if ($skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6) {
    $pirmas = $skaicius1;
} else
if (   $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6 
    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6) {
    $antras = $skaicius1;
} else
if (   $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6

    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6

    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6
    
    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6) {
    $trecias = $skaicius1;
} else
if (   $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6

    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6

    || $skaicius1 < $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6) {
    $ketvirtas = $skaicius1;
} else
if (   $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 < $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 < $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 < $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 > $skaicius2 && $skaicius1 < $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6
    || $skaicius1 < $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6) {
    $penktas = $skaicius1;
} else
if ($skaicius1 > $skaicius2 && $skaicius1 > $skaicius3 && $skaicius1 > $skaicius4 && $skaicius1 > $skaicius5 && $skaicius1 > $skaicius6) {
    $sestas = $skaicius1;
}


if ($skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6) {
    $pirmas = $skaicius2;
} else
if (   $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6 
    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6) {
    $antras = $skaicius2;
} else
if (   $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6

    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6

    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6
    
    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6) {
    $trecias = $skaicius2;
} else
if (   $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6

    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6

    || $skaicius2 < $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6) {
    $ketvirtas = $skaicius2;
} else
if (   $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 < $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 < $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 < $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 > $skaicius1 && $skaicius2 < $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6
    || $skaicius2 < $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6) {
    $penktas = $skaicius2;
} else
if ($skaicius2 > $skaicius1 && $skaicius2 > $skaicius3 && $skaicius2 > $skaicius4 && $skaicius2 > $skaicius5 && $skaicius2 > $skaicius6) {
    $sestas = $skaicius2;
}


if ($skaicius3 < $skaicius1 && $skaicius1 < $skaicius3 && $skaicius1 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6) {
    $pirmas = $skaicius3;
} else
if (   $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6 
    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6) {
    $antras = $skaicius3;
} else
if (   $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6

    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6

    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6
    
    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6) {
    $trecias = $skaicius3;
} else
if (   $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius3 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius3 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius3 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6

    || $skaicius3 < $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6) {
    $ketvirtas = $skaicius3;
} else
if (   $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 < $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 > $skaicius1 && $skaicius3 < $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6
    || $skaicius3 < $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6) {
    $penktas = $skaicius3;
} else
if ($skaicius3 > $skaicius1 && $skaicius3 > $skaicius2 && $skaicius3 > $skaicius4 && $skaicius3 > $skaicius5 && $skaicius3 > $skaicius6) {
    $sestas = $skaicius3;
}


if ($skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6) {
    $pirmas = $skaicius4;
} else
if (   $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6 
    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6) {
    $antras = $skaicius4;
} else
if (   $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6

    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6

    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6
    
    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6) {
    $trecias = $skaicius4;
} else
if (   $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6

    || $skaicius4 < $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6) {
    $ketvirtas = $skaicius4;
} else
if (   $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 < $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 > $skaicius1 && $skaicius4 < $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6
    || $skaicius4 < $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6) {
    $penktas = $skaicius4;
} else
if ($skaicius4 > $skaicius1 && $skaicius4 > $skaicius2 && $skaicius4 > $skaicius3 && $skaicius4 > $skaicius5 && $skaicius4 > $skaicius6) {
    $sestas = $skaicius4;
}


if ($skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6) {
    $pirmas = $skaicius5;
} else
if (   $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6 
    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6) {
    $antras = $skaicius5;
} else
if (   $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6

    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6

    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6
    
    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6) {
    $trecias = $skaicius5;
} else
if (   $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius5 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius5 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius5 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6

    || $skaicius5 < $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6) {
    $ketvirtas = $skaicius5;
} else
if (   $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 < $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 < $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 < $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 > $skaicius1 && $skaicius5 < $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6
    || $skaicius5 < $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6) {
    $penktas = $skaicius5;
} else
if ($skaicius5 > $skaicius1 && $skaicius5 > $skaicius2 && $skaicius5 > $skaicius3 && $skaicius5 > $skaicius4 && $skaicius5 > $skaicius6) {
    $sestas = $skaicius5;
}


if ($skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5) {
    $pirmas = $skaicius6;
} else
if (   $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5 
    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5) {
    $antras = $skaicius6;
} else
if (   $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5

    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5

    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5
    
    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5) {
    $trecias = $skaicius6;
} else
if (   $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius6 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius6 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius6 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5

    || $skaicius6 < $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5) {
    $ketvirtas = $skaicius6;
} else
if (   $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 < $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 < $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 < $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 > $skaicius1 && $skaicius6 < $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5
    || $skaicius6 < $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5) {
    $penktas = $skaicius6;
} else
if ($skaicius6 > $skaicius1 && $skaicius6 > $skaicius2 && $skaicius6 > $skaicius3 && $skaicius6 > $skaicius4 && $skaicius6 > $skaicius5) {
    $sestas = $skaicius6;
}

echo "$pirmas $antras $trecias $ketvirtas $penktas $sestas";

?>