<?php  

print ("<h2><u>Tampilan Array</u></h2>");

$data[0]="satu"; // index 0 
$data[1]="Dua"; // index 1
$data[2]="tiga"; // index 2
$data[3]="empat"; // index 3
$data[4]="lima"; // index 4
$data[5]="enam"; // index 5

for ($a=0; $a<=3; $a++){ // menampilkan value dari array berdasarkan perulangan $a dimana di klasifikasi kan sebagai index
     echo "$data[$a] <br><br>"; 
}