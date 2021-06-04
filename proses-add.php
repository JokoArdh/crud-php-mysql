<?php

require("koneksi.php");

if(isset($_POST['add'])){

    $name = $_POST['nama'];
    $jk = $_POST['gender'];
    $lamat = $_POST['alamat'];
    $email = $_POST['email'];
    $born = $_POST['born'];

    $sql = "INSERT INTO individu VALUES ('','$name','$jk','$lamat','$email','$born')";
    $query = mysqli_query($con, $sql);

    header("location:index.php?notif=input");
}

?>