<?php 

//include koneksi database
include('../../../komponen/koneksi.php');

$judul = $_POST['judul'];
$desk = $_POST['desk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
    header("location:index.php?alert=gagal_ekstensi");
}else{
    if($ukuran < 2044070){      
        $gambar = $rand.'_'.$filename;
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../../upload/'.$rand.'_'.$filename);
        mysqli_query($koneksi, "INSERT INTO produk (id_kategori, judul, desk, harga, stok, gambar) VALUES ('$id_kategori', '$judul', '$desk', '$harga', '$stok', '$gambar')");
        header("location:index.php?alert=berhasil");
    }else{
        header("location:index.php?alert=gagak_ukuran");
    }
}