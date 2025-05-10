<html>
<body bgcolor="#ffff">

<?php 


$barang=array(
     "mobil" => array(
          "sedan" => "merah",
          "pickup" => "biru muda",
          "truk" => "kuning",
     ), 
     "pesawat" => array(
          "udara" => "putih",
          "telp" => "hitam",
          "tv" => "coklat",
     ),
     "kereta" => array(
          "kencana" => "hijau",
          "kuda" => "ungu",
          "api" => "hijau tua"
     ),
);

echo $barang["mobil"]["sedan"]; // merah 

echo "<br><br>";

echo $barang["mobil"]["truk"]; // kuning

echo "<br><br>";

echo $barang["mobil"]["truk"]; // kuning

?>

</body>
</html> 