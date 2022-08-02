<?php

include('../../../komponen/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM lelang WHERE id_lelang = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>