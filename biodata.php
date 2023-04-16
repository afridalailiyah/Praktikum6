<html>
<head>
    <title>Biodata Diri</title>
</head>

<body>
    <form method="POST" action="biodataAct.php" enctype="multipart/form-data">
        <center>
            <h2>BIODATA DIRI</h2>
        </center>
        <table width="500" align="center" cellpadding="2">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" placeholder="Tempat Lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jkelamin" value="Laki-laki" required>Laki-laki</td>
                <td><input type="radio" name="jkelamin" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" placeholder="Status"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input type="text" name="prodi" placeholder="Prodi"></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td><input type="text" name="fakultas" placeholder="Fakultas"></td>
            </tr>
            <tr>
                <td>Deskripsi Pribadi Saya</td>
                <td><textarea name="deskripsi" id="Deskripsi" cols="25" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnlogin" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>