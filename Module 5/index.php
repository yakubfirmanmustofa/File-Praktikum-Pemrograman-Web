<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika');
?>

<body>
    <center>
        <h3>Masukkan Data Mahasiswa</h3>
        <table border="0" width='30'>
            <form method='POST' action='form.php'>
                <tr>
                    <td width='25%'>NIM</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='nim' size='10'></td>
                </tr>
                <td width='25%'>Nama</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='nama' size='30'></td>
                </tr>
                <td width='25%'>Kelas</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='radio' value='A' checked name='kelas'>A
                    <input type='radio' value='B' name='kelas'>B
                    <input type='radio' value='C' name='kelas'>C
                </td>
                </tr>
                <td width='25%'>Alamat</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='alamat' size='40'></td>
                </tr>
            </form>
        </table>
        <input type='submit' value='Masukkan' name='submit'>

    </center>
</body>


</html>