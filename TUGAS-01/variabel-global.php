<?php  

$A = 123; // variabel global

function Test(){
     $A = "Test"; // variabel local dalam function
     $bintang = "Muhammad Bintang";
     echo "Nilai A dalam fungsi = $A <br/>"; // ini memanggil variabel $A yang ada di dalam fungsi
     echo "Panggil Nama : $bintang <br/>";
}

Test();
Test();
echo "Nilai A di luar fungsi : $A <br/>"; // ini menmanggil variabel $A di luar fungsi
echo "Nilai A di luar fungsi : $A <br/>";
echo "Nilai A di luar fungsi : $A <br/>";
Test();