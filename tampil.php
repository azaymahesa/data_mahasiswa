<html>
<head>
  <title>Tampil PHP</title>
</head>
<body>
  <h3>Data Mahasiswa</h3>
  <table border="2" width="100%">
  <tr>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Prodi</th>
    <th>Alamat</th>
    <th>Nomor_Telp</th>
  </tr>
  
  
  <?php
  
  include "koneksi.php";

  $query = "SELECT * FROM yusuf"; 
  $sql = mysqli_query($connect, $query); 

  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td>".$data['nim']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['prodi']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['Telp']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>