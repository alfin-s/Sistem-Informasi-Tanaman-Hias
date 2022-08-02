<?php 
  //get data dari form

include('../../../komponen/koneksi.php');

$judul_profil     = $_POST['judul_profil'];
$desk_profil   = $_POST['desk_profil'];
$instagram   = $_POST['instagram'];
$facebook   = $_POST['facebook'];
$whatsapp   = $_POST['whatsapp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE profil SET judul_profil = '$judul_profil', desk_profil = '$desk_profil', instagram = '$instagram', facebook = '$facebook', whatsapp = '$whatsapp'  WHERE id_profil = 1";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("Location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

 ?>