<?php

include('../../../komponen/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM artikel WHERE id_artikel = '$id'";

if($koneksi->query($query)) {
    header("location: data-artikel.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>