<?php 

//include koneksi database
include('../../../komponen/koneksi.php');

$judul_lelang = $_POST['judul_lelang'];
$jam_lelang = $_POST['jam_lelang'];
$tanggal_lelang = $_POST['tanggal_lelang'];
$grupwa = $_POST['grupwa'];

 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar_lelang']['name'];
$ukuran = $_FILES['gambar_lelang']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
    header("location:index.php?alert=gagal_ekstensi");
}else{
    if($ukuran < 2044070){      
        $gambar_lelang = $rand.'_'.$filename;
        move_uploaded_file($_FILES['gambar_lelang']['tmp_name'], '../../upload/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "INSERT INTO lelang (judul_lelang, jam_lelang, tanggal_lelang, grupwa, gambar_lelang) VALUES ('$judul_lelang', '$jam_lelang', '$tanggal_lelang', '$grupwa', '$gambar_lelang')");
        header("location:index.php?alert=berhasil");
    }else{
        header("location:index.php?alert=gagal_ukuran");
    }
}