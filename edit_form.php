<html>
<head>
  <title>Edit</title>
</head>
<body>
  <h1>Edit Data Mahasiswa</h1>
 
  <?php
  // Load file koneksi.php
  include "koneksi.php";
 
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $nim = $_GET['nim'];
 
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM yusuf WHERE nim='".$nim."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
 
  <form method="post" action="edit_proses.php?nim=<?php echo $nim; ?>" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  </table>
 
  <hr>
  <input type="submit" value="Edit">
  <a href="edit_form.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>