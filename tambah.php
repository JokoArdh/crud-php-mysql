<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Adding Data</title>
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
    <form action="proses-add.php" method="post">
        <fieldset>
        <legend>Input Data Individu</legend>
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="add nama lengkap"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="pria">pria
                        <input type="radio" name="gender" value="wanita">wanita
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email" placeholder="add email address"></td>
                </tr>
                <tr>
                    <td>Born</td>
                    <td><input type="date" name="born"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="add" value="ADD"> || <input type="reset" value="Cencel"></td>
                </tr>
            </table>
        
        </fieldset>
    </form>

    <p><a href="index.php"><<--BACK</a></p>
</body>
</html>