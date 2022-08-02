<?php 

//include koneksi database
include('../../../komponen/koneksi.php');

$judul_artikel = $_POST['judul_artikel'];
$desk_artikel = $_POST['desk_artikel'];
$link_youtube = $_POST['link_youtube'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar_artikel']['name'];
$ukuran = $_FILES['gambar_artikel']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
    header("location:data-artikel.php?alert=gagal_ekstensi");
}else{
    if($ukuran < 2044070){      
        $gambar_artikel = $rand.'_'.$filename;
        move_uploaded_file($_FILES['gambar_artikel']['tmp_name'], '../../upload/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "INSERT INTO artikel (judul_artikel, desk_artikel, link_youtube, gambar_artikel) VALUES ('$judul_artikel', '$desk_artikel', '$link_youtube', '$gambar_artikel')");
        header("location:data-artikel.php?alert=berhasil");
    }else{
        header("location:data-artikel.php?alert=gagal_ukuran");
    }
}