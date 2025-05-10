<?php 

$kab[0]="Enrekang";
$kab[1]="Pinrang";
$kab[2]="Sidrap";
$kab[3]="Barru";
$kab[4]="Maros";

// Menampilkan Array
print("<b>1. Elemen Array Kabupaten </b><br>");
print_r($kab);
print("<br>");

$kabu=$kab;
arsort($kabu);
print("<br><b>2. Urutkan Elemen Array dari Z-A </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
asort($kabu);
print("<br><b>3. Urutkan Elemen Array dari A-Z </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
ksort($kabu);
print("<br><b>4. Urutkan Index Array dari Z-A </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
krsort($kabu);
print("<br><b>5. Urutkan Index Elemen Array dari A-Z </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
natsort($kabu);
print("<br><b>6. Urutkan Elemen Array apa adanya </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
natcasesort($kabu);
print("<br><b>7. urutkan Index Elemen Array apa adanya dengan case sensitive </b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
rsort($kabu);
print("<br><b>8. urutkan Index Elemen Array dari Z-A tanpa mempertahankan indexnya</b><br>");
print_r($kabu);
print("<br>");

$kabu=$kab;
sort($kabu);
print("<br><b>9. urutkan Index Elemen Array dari A-Z tanpa mempertahankan indexnya </b><br>");
print_r($kabu);
print("<br>");



