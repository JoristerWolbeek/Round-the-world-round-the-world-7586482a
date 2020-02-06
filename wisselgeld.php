<?php
$munten=array (
    "50 euro"=>0,
    "20 euro"=>0,
    "10 euro"=>0,
    "5 euro"=>0,
    "2 euro"=>0,
    "1 euro"=>0,
    "0.50 cent"=>0,
    "0.20 cent"=>0,
    "0.10 cent"=>0,
    "0.05 cent"=>0,
);

$bedrag = doubleval($argv[1]);
$restBedrag = round($bedrag, 2, PHP_ROUND_HALF_UP);

foreach($munten as $munt => $hoeveelMunt) {
    $muntFix = doubleval($munt);
    while($restBedrag >= $muntFix) {
        $munten[$munt]++;
        $restBedrag = round($restBedrag-$muntFix, 2);
    }
}

foreach($munten as $munt=>$hoeveelMunt) {
    $muntFix = doubleval($munt);
    if($hoeveelMunt >= 1) {
        $tussen=explode(" ", $munt);
        echo($muntFix." ".$tussen[1]." x ".$hoeveelMunt.PHP_EOL);
    }
}