<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$Nomor_Telp = $_POST['Telp'];

  $query = "INSERT INTO yusuf VALUES('".$nim."', '".$nama."', '".$prodi."', '".$alamat."', '".$Nomor_Telp."')";
  $sql = mysqli_query($connect, $query); 
  if($sql){ 

 echo "Data sudah tersimpan.";
    
  }else{
   
    echo "Maaf, data gagal tersimpan.";
    echo "<br><a href='tambah_form.php'>Kembali Ke Form</a>";
  }

?>