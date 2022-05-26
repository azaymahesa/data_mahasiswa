<html>
<head>
  <title>Tambah</title>
</head>
<body>
  <h2>Tambah Mahasiswa</h2>
  <form method="post" action="tambah_proses.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nim</td>
    <td><input type="text" name="nim"></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>Prodi</td>
    <td><input type="text" name="prodi"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><input type="text" name="alamat"></td>
  </tr>
   <tr>
    <td>Nomor_Telp</td>
    <td><input type="text" name="Telp"></td>
  </tr>
  </table>


  <br/>
  <br/>
  <input type="submit" value="Simpan">
  <a href="tambah_form.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
