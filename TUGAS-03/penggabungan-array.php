<?php  

$kab[0]="Enrekang";
$kab[1]="Pinrang";
$kab[2]="Sidrap";
$kab[3]="Barru";
$kab[4]="Pangkep";
$kab[5]="Soppeng";
$kab[6]="Maros";

$hari[0] = "Senin";
$hari[1] = "Selasa";
$hari[2] = "Rabu";
$hari[3] = "Kamis";
$hari[4] = "Jumat";
$hari[5] = "Sabtu";
$hari[6] = "Ahad"; 

// Contoh penggabungan array
$gabung=array_merge($kab,$hari); // gabung  array $kab dan array $hari
$jmlkab=sizeof($kab); // hitung jml array $kab
$jmlhari=sizeof($hari); // hitung jml array $hari
$jmlgabung=sizeof($gabung); // hitung jml array hasil gabungan $kab dan $hari pada $gabung

//Menampilkan Array
print("<b>Elemen Array Kabupaten </b><br>");
print_r($kab);
print("<br><br><b>Elemen Array Hari </b><br>");
print_r($hari);
print("<br><br><b>Elemen Array Gabungan</b> <br>");
print_r($gabung); 

print("<br><br><b>Jumlah elemen array kabupaten:</b>
$jmlkab<br>");
print("<br><br><b>Jumlah elemen array hari:</b>
$jmlhari<br>");
print("<br><br><b>Jumlah elemen array Gabungan:</b>
$jmlgabung<br>");