<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<style>
    h3{
        text-align: center;
    }
    form{
        width: 500px;
        margin: auto;
    }
</style>
<body>
<header>
        <h3>Formulir Add New Data</h3>
    </header>
    <?php
    
        require("koneksi.php");

        $id = $_GET['id'];
        $sql = "SELECT * FROM individu WHERE id = '$id' ";
        $query = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($query)){
    
    ?>

    <form action="proses-update.php" method="post">
        <fieldset>
        <legend>Input Data Individu</legend>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <?php $jk = $data['gender'] ?>
                    <td>
                        <input type="radio" name="gender" value="pria" <?php echo ($jk == 'pria') ? "checked": "" ?>>pria
                        <input type="radio" name="gender" value="wanita" <?php echo ($jk == 'wanita') ? "checked": "" ?>>wanita
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td>Born</td>
                    <td><input type="date" name="born" value="<?php echo $data['born'] ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" value="UPDATE"> || <input type="reset" value="CENCEL"></td>
                </tr>
            </table>
        <?php } ?>
        </fieldset>
    </form>

    <p><a href="index.php"><<--BACK</a></p>
</body>
</html>