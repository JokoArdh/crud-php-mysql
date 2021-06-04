<?php

//masukan koneksi
require("koneksi.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM individu WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    header("location:index.php?notif=hapus");   

}


?>