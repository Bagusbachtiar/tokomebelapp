<?php
include '../dbconnect.php';

$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$hargasatuan = $_POST['hargasatuan'];
$idkategori = $_POST['idkategori'];
$createdat = $_POST['createdat'];



$query = "UPDATE detailtagihan SET  id='$id',jumlah='$jumlah',hargasatuan='$hargasatuan',idkategori='$idkategori',createdat='$createdat' WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'detailtagihan.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'detailtagihan.php'
  </script>
<?php } ?>