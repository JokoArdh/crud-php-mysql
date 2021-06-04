<?php require("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<style>
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    header{
        height: 200px;
        width: auto;
        background-color: cyan;
        text-align: center;
    }
    footer{
        height: 50px;
        width: auto;
        background-color: cyan;
        text-align: center;
    }
    footer p{
        padding: 10px;
        line-height: 15pt;
    }
    h2{
        padding: 10px;
    }
    a{
        padding: 5px;
        text-decoration: none;
    }
    table{
        border-collapse: collapse;
    }
    tr th, tr td{
        padding: 10px 20px;
    }
</style>

<body>
    <header>
        <H2>Latihan Project web programming  UBY</H2>
        <h5>Fakultas Computer Science</h5>
    </header>
    <hr>
    <h4>Table Data Penduduk</h4>
    <br>
    <?php
        if(isset($_GET['notif'])){
            $notif = $_GET['notif'];
            if($notif == "input"){
                echo "<font color='green'>Data Success ADD</font>";
            }elseif($notif == "update"){
                echo "<font color='blue'>Data Has Update</font>";
            }elseif($notif == "hapus"){
                echo "<font color='red'>Data Has Delete</font>";
            }
        }
    ?>
    <p>
        <a href="tambah.php">[+]Add Data</a>
    </p>
    <table border="1" type="collapse">
        <thead>
            <tr>
                <th>No</th> 
                <th>Nama</th>
                <th>Jenis_kel</th>
                <th>Alamat</th>
                <th>E-mail</th>
                <th>TTL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $nomor = 1;
                $sql = "SELECT * FROM individu";
                $query = mysqli_query($con, $sql);
                while($data=mysqli_fetch_array($query))
                {
                    echo "<tr>";

                    echo "<td>".$nomor++."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['gender']."</td>";
                    echo "<td>".$data['alamat']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['born']."</td>";
                    echo '<td>
                            <a  href="edit.php?id='.$data['id'].'">[#]Update</a> ||
                            <a  href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">[-]Delete</a>
                        </td>';
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>
    <p>Jumlah : <?php echo mysqli_num_rows($query) ?></p>
    <footer><p>Created By Joko Ardiyanto @2021</p></footer>
</body>
</html>