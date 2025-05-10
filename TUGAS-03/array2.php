<?php 

$hari = array(
     "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"
);

$bulan = array(
     "Januari", "Februari", "Maret", "April", "Mei", "Juni",
     "Juli", "Agustus", "September", "Oktober", "November", "Desember"
);

$kode_hari = date("w");
$kode_bulan = date("m");

echo "<u> <b> Nama-Nama Hari </b> </u> <br>";

for ($i=0;$i < 7;$i++){
     printf("%s, ",$hari[$i]); 
}

echo "<br> <br> <u> <b> Nama-Nama Bulan </b> </u> <br>";

for ($i=0;$i < 12;$i++){
     printf("%s, ",$bulan[$i]);
     echo "<br><br>"; 
}

printf("Hari ini <b> %s </b>",

$hari[$kode_hari]);

printf("tanggal <b> %s </b>", date("d") );
printf("bulan <b> %s </b>",

$bulan[$kode_bulan-1]);

printf("tahun <b> %s </b>", date("Y")); 