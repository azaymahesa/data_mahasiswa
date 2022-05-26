<html>
<head>
  <title>Edit</title>
</head>
<body>
  <h1>Edit Data Mahasiswa</h1>
 
  <table border="1" width="100%">
  <tr>
 <th><th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Prodi</th>
    <th>Alamat</th>
    <th>Nomor_Telp</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
 
  $no=0;//variabel no
//$tampil = mysql_query("SELECT * FROM kategori ORDER BY id_kategori ASC");
//while ($r=mysql_fetch_array($tampil)){
//no++;
//echo "$no"; //Untuk menampilkan no urut otomatis

//}
 
  $query = "SELECT * FROM yusuf"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
 
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
  $no++;
    echo "<tr>";
 echo "<td>$no</td>";
   
    echo "<td>".$data['nim']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['prodi']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['Telp']."</td>";
    echo "<td><a href='edit_form.php?nim=".$data['nim']."'>Edit</a></td>";
    echo "<td><a href='hapus_proses.php?nim=".$data['nim']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>