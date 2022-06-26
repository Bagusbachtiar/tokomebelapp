<?php
include '../dbconnect.php';

$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$hargasatuan = $_POST['hargasatuan'];
$idproduk = $_POST['idproduk'];




$query = "UPDATE detailtagihan SET  id='$id',jumlah='$jumlah',hargasatuan='$hargasatuan',idproduk='$idproduk' WHERE id = $id";
$result = mysqli_query($conn, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = "detailtagihan.php?op=edit&idtagihan=<?=$id?>"
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'detailtagihan.php?op=edit&idtagihan=<?=$id?>'
  </script>
<?php } ?>