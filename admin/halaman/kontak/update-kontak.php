<?php 
  //get data dari form

include('../../../komponen/koneksi.php');

$judul_kontak     = $_POST['judul_kontak'];
$desk_kontak   = $_POST['desk_kontak'];
$instagram   = $_POST['instagram'];
$facebook   = $_POST['facebook'];
$whatsapp   = $_POST['whatsapp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kontak SET judul_kontak = '$judul_kontak', desk_kontak = '$desk_kontak', instagram = '$instagram', facebook = '$facebook', whatsapp = '$whatsapp'  WHERE id_kontak = 1";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("Location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

 ?>