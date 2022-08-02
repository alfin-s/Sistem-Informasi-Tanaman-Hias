<?php

include('../../../komponen/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id_produk = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>