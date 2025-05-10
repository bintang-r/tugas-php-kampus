<?php

// contoh konstanta
echo "CONTOH PENERAPAN KONSTANTA PADA BANK <br>";
echo "========================================= <br>";

define('bunga', 0.12);
$tabung = 500000;
$tabungan = $tabung + ($tabung * bunga);
printf("bunga =%s <br>", bunga);
printf("tabung =%s <br>", $tabung);
printf("tabungan =%s <br>", $tabungan);
printf("<h3>COBA UBAH NILAI KONSTANTA</h3>");
$bunga = 0.15;

printf("bunga =%s <br>", bunga); // tidak berubah tetap 0.12
printf("bunga =%s <br>", $bunga); // berubah karena bukan konstanta yang merupakan variable karena ada ($) simbol dollar



// contoh lain
// const BUNGA = 0.12;
