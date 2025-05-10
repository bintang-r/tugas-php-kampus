<?php 

echo"contoh penerapan statemen if else<br>";
echo"============================ <br>";

$nilai=55;

if ($nilai >= 56){ // apakah nilai lebih besar atau sama dengan 56?
     $keterangan="Anda Lulus"; // jika terpenuhi
}else{
     $keterangan="Anda belum Lulus"; // jika tidak terpenuhi (opsi selain)
}

printf("Nilai Anda =%d <br>",$nilai);
printf("Keterangan =%s <br>",$keterangan);
