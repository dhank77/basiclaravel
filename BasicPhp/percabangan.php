<?php

$nilai = 71;

// if else
// > lebih besar
// >= lebih besar sama dengan
// < lebih kecil
// <= lebih kecil sama dengan
// if ($nilai > 70) {
//     echo "Lulus";
// } else {
//     echo "Tidak Lulus";
// }

// switch ($nilai) {
//     case $nilai > 90:
//         echo "Nilai besar dari 90 dan nilainya adalah " . $nilai;
//         break;

//     case $nilai > 70:
//         echo "Nilai besar dari 70 dan nilainya adalah " . $nilai;
//         break;
    
//     default:
//         echo "Nilainya tidak memenuhi syarat";
//         break;
// }

$hasil = match (true) {
    $nilai > 90 => "Nilai A",
    $nilai > 70 => "Nilai B",
    $nilai > 60 => "Nilai C",
    default => "Nilai D",
};

echo $hasil;