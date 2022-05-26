<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nim = $_GET['nim'];
// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];

    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM yusuf WHERE nim='".$nim."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
   
    // Proses ubah data ke Database
    $query = "UPDATE yusuf SET nama='".$nama."' WHERE nim='".$nim."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
     // header("location: index.php"); // Redirect ke halaman index.php
  echo "Perubahan sudah tersimpan.";
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, gagal disimpan.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
?>