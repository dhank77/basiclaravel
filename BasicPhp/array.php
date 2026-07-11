<?php

$namaVariabel = 'hamdani latjoro';
$array = ['apel', 'anggur', 'jambu', 'semangka', 'nanas', 'mangga'];
$arraykey = [
    'buah1' => 'apel',
    'buah2' => 'anggur',
    'buah3' => 'semangka',
];

$objectkey = (object) $arraykey;

var_dump($arraykey, $objectkey);
echo "<br/>";
echo $arraykey['buah1'];
echo "<br/>";
echo $objectkey->buah2;