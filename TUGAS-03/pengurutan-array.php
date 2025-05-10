<?php  

/**
 * Asort(array)
 * Mengurutkan element array dari besar ke kecil /  Z - A (descending)
 * 
 * asort(array)
 * Mengurutkan element array dari kecil ke besar / A - Z (ascending)
 * 
 * ksort(array)
 * Mengurutkan index array dari kecil ke besar / A - Z (ascendng)
 * 
 * krsort(array)
 * Mengurutkan index array dari besar ke kecil / Z - A (descending)
 * 
 * natsort(array)
 * Mengurutkan element array secara urutan alamiah
 * 
 * natcasesort(array)
 * Mengurutkan element array secara urutan alamiah yang bersifat case sensitive
 * 
 * rsort(array)
 * Mengurutkan element array dari besar ke kecil / Z - A (descending) dan tidak mempertahankan indexnya
 * 
 * sort(array)
 * Mengurutkan element array dari kecil ke besar / A - Z (ascending) dan tidak mempertahankan indexnya
 */

$nim["arman"] = "200811001";
$nim["wati"] = "200511004";
$nim["baco"] = "200712002";
$nim["sangkala"] = "200613003";

// Menampilkan array

print("<b>1. Elemen Array Mahasiswa </b><br>");
print_r($nim);
print("<br>");

$mhs=$nim;
krsort($mhs);
print("<br><b>2. Urutkan Elemen Array dari Z-A by krsort </b><br>");
print_r($mhs);
print("<br>");

$mhs=$nim;
ksort($mhs);
print("<br><b>3. Urutkan Elemen Array dari A-Z by ksort </b><br>");
print_r($mhs);
print("<br>");

$mhs=$nim;
sort($mhs);
print("<br><b>4. Urutkan elemen Array dari Z-A tanpa memperhatikan indexnya by sort</b><br>");
print_r($mhs);
print("<br>");

