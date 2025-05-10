<?php  

$hari[0] = "Senin";
$hari[1] = "Selasa";
$hari[2] = "Rabu";
$hari[3] = "Kamis";
$hari[4] = "Jumat";
$hari[5] = "Sabtu";
$hari[6] = "Ahad";

$balik=array_reverse($hari);
print("<b>Elemen Array AWAl: </b><br>");
print_r($hari);  
print ("<br>");
print("<br><br><b>Elemen Array setelah REVERSE :</b> <br>");
print_r($balik); 

