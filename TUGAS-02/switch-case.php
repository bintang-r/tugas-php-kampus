<?php 

$kode = date("m");

switch($kode){
     case "01" :
          $bulan = "Januari";
          break;
     case "02" :
          $bulan = "Februari";
          break;
     case "03" :
          $bulan = "Maret";
          break;
     case "04" :
          $bulan = "April";
          break;
     case "05" :
          $bulan = "Mei";
          break;
     case "06" :
          $bulan = "Juni";
          break;
     case "07" :
          $bulan = "Juli";
          break;
     case "08" :
          $bulan = "Agustus";
          break;
     case "09" :
          $bulan = "September";
          break;
     case "10" :
          $bulan = "Oktober";
          break;
     case "11" :
          $bulan = "November";
          break;
     default :
          $bulan = "Desember";
          break;
}

printf("Kode : $kode <br/>");
printf("Nama Bulan : $bulan <br/>");

$kodeHari = Date("D");

switch($kodeHari){
     case "Sun" :
          $hari = "Senin";
     case "Tue";
          $hari = "Selasa";
     break;
     case "Wes" :
          $hari = "Rabu";
     break;
     case "Thu" :
          $hari = "Kamis";
          break;
     case "Fri" :
          $hari = "Jumat";
          break;
     case "Sat" :
          $hari = "Sabtu";
          break;
     default :
          $hari = "Minggu";
          break;
}

$tahun = Date("Y");

$tgl = "$hari, $bulan - $tahun";
printf($tgl);