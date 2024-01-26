<?php
$angka_pertama = (int) readline("Masukkan angka pertama: ");
$angka_kedua = (int) readline("Masukkan angka kedua: ");
$x = (int) readline("Masukkan nilai x: ");
$selisih = $angka_kedua - $angka_pertama;
$i = 1;
while ($i <= $x) {
    
    echo $angka_pertama . "\n";

    $angka_pertama += $selisih;

    $i++;
}
?>
