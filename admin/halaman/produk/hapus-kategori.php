<?php

include('../../../komponen/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id_kategori = '$id'";

if($koneksi->query($query)) {
    header("location: kategori.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>