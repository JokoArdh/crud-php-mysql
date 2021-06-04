<?php

require("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['gender'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$born = $_POST['born'];

$sql = "UPDATE individu SET nama='$nama', gender='$jk', alamat='$alamat', email='$email', born='$born' WHERE id='$id' ";
$query = mysqli_query($con, $sql);

header("location:index.php?notif=update");

?>