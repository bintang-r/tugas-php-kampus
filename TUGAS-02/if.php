<?php 

echo"contoh penerapan statemen if<br>";
echo"============================ <br>";

$nilai=85;
$keterangan="Anda Belum Lulus";

if ($nilai >= 71){ // apakah nilai lebih besar atau sama dengan 71?
     $keterangan="Anda Lulus"; // jika kondisi terpenuhi
}

printf("Nilai Anda =%d <br>",$nilai);
printf("Keterangan =%s <br>",$keterangan);
