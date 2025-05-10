<?php  

/**
 * - current(nama_array);
 *   Menghasilkan nilai elemen sekarang yg
 *   ada dalam array
 * 
 * - each(nama_array);
 *   Menghasilkan index dan nilai element sekarang
 *   
 *   index 0 -> index array
 *   index 1 -> element array
 *   "key" -> index array
 *   "value -> inseks (data element array)
 * 
 * - end(nama_array);
 *   Meletakkan pointer internal ke element terakhir
 * 
 * - key(nama_array);
 *   Menghasilkan indeks element yang ditunjukkan pointer
 * 
 * - pos(nama_array);
 *   Menghasilkan nilai element sekarang
 * 
 * - prev(nama_array);
 *   menghasilkan nilai element sebelum pointer
 * 
 * - reset(nama_array);
 *   meletakkan pointer internal ke element pertama
 * 
 * - next(nama_array);
 *   meletakkan pointer internal ke element selanjutnya
 */

$data[0] = "Senin";
$data[1] = "Selasa";
$data[2] = "Rabu";
$data[3] = "Kamis";
$data[4] = "Jumat";
$data[5] = "Sabtu";
$data[6] = "Ahad";

// Contoh penggunaan current dan key
print("<B>Setelah pendefinisian array </B><BR>");
$nilai = current($data);
$indeks = key($data);
print("Indeks sekarang : $indeks <BR>");
print("Nilai elemen sekarang : $nilai <BR><BR>"); 

// Contoh penggunaan end
$nilai = end($data); // Ke elemen terakhir
$indeks = key($data);
print("<B>Setelah pemanggilan end </B><BR>");
print("Indeks sekarang : $indeks <BR>");
print("Nilai elemen sekarang : $nilai <BR><BR>");

// Contoh penggunaan prev
$nilai = prev($data); // Ke elemen sebelumnya
$indeks = key($data);
print("<B>Setelah pemanggilan prev </B><BR>");
print("Indeks sekarang : $indeks <BR>");
print("Nilai elemen sekarang : $nilai <BR><BR>"); 

// Contoh penggunaan reset
$nilai = reset($data); // Ke elemen pertama
$indeks = key($data);
print("<B>Setelah pemanggilan reset </B><BR>");
print("Indeks sekarang : $indeks <BR>");
print("Nilai elemen sekarang : $nilai <BR><BR/>");

// Contoh penggunaan next
$nilai = next($data); // Ke elemen berikutnya
$indeks = key($data);
print("<B>Setelah pemanggilan next </B><BR>");
print("Indeks sekarang : $indeks <BR>");
print("Nilai elemen sekarang : $nilai <BR>"); 