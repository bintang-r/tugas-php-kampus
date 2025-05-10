<?php
$nilai = isset($_POST['nilai']) ? $_POST['nilai'] : null; // ambil nilai dari endpoint post
$keterangan = ""; // variabel keterangan

if ($nilai !== null && $nilai !== '') { // if statement apakah nilai ada atau tidak
     $nilai = intval($nilai); // ubah menjadi integer

     if ($nilai >= 60) { // if statement apakah nilai lebih besar atau sama dengan 60
          $keterangan = "Anda Lulus"; // jika kondisi terpenuhi
     } else {
          $keterangan = "Anda Belum Lulus"; // jika kondisi tidak terpenuhi
     }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contoh Penerapan Statement IF</title>
</head>

<body>
<form method="POST">
     <label for="nilai">Nilai Mahasiswa:</label>
     <input type="text" name="nilai" id="nilai" value="<?= htmlspecialchars($nilai ?? '') ?>" required>
     <button type="submit">Cek Kelulusan</button>
</form>

<?php if ($nilai !== null && $nilai !== ''): ?>
     <p>Nilai Anda = <?= $nilai ?></p>
     <p>Keterangan = <?= $keterangan ?></p>
<?php endif; ?>
</body>

</html>