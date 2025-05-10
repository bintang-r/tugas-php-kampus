<!DOCTYPE html>
<html>
<head>
     <title>Array</title>
     <style>
          table { border-collapse: collapse; }
          td, th { border: 1px solid #000; padding: 5px; }
          th { background: #eee; }
     </style>
</head>
     <body>
          <?php

               $Harga = [
                    "Durian" => [15000, 12500, 10000],
                    "Kelapa" => [20000, 15000, 13000],
                    "Melon"  => [18000, 14000, 11000]
               ];

               echo "<table>";
               echo "<tr><th colspan='4' align='center'>DAFTAR HARGA BUAH/KG</th></tr>";
               echo "<tr><th rowspan='2'>Buah</th><th colspan='3' align='center'>Kualitas</th></tr>";
               echo "<tr><th align='center'>Satu</th><th align='center'>Dua</th><th align='center'>Tiga</th></tr>";

               foreach ($Harga as $buah => $kualitas) {
                    echo "<tr><td>{$buah}</td>";

                    foreach ($kualitas as $harga) {
                         echo "<td align='right'>" . number_format($harga, 0, ',', '.') . "</td>";
                    }

                    echo "</tr>";
               }
               echo "</table>";
          ?>

          <br>PEMBELIAN<br>

          <form method="get">
               Nama Buah :
               <select name="nb">
                    <option value="Durian">Durian</option>
                    <option value="Kelapa">Kelapa</option>
                    <option value="Melon">Melon</option>
               </select><br>
               Kualitas :
               <input type="radio" name="kualitas" value="0" id="k1"><label for="k1">Satu</label>
               <input type="radio" name="kualitas" value="1" id="k2"><label for="k2">Dua</label>
               <input type="radio" name="kualitas" value="2" id="k3"><label for="k3">Tiga</label>
               <br>
               Jumlah :
               <input type="number" name="jml" size="4" min="1">
               <input type="submit" value="Proses">
          </form>

          <?php
               if (isset($_GET['nb'], $_GET['kualitas'], $_GET['jml'])) {
                    $nb = $_GET['nb'];
                    $kualitas = $_GET['kualitas'];
                    $jml = (int)$_GET['jml'];

                    if (empty($nb) || $jml <= 0 || !isset($Harga[$nb][$kualitas])) {
                         echo "Data Tidak Lengkap atau Salah";
                    } else {
                         $total = $jml * $Harga[$nb][$kualitas];
                         echo "<br>Total Harga = Rp " . number_format($total, 0, ',', '.');
                    }
               }
          ?>
     </body>
</html>