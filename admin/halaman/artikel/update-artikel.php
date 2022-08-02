<?php 

//include koneksi database
include('../../../komponen/koneksi.php');
// Mengecek apakah ID ada datanya atau tidak
if (isset($_GET['id'])) {
    if ($_GET['id'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        //get data dari form
        $id     = $_GET['id'];
        $judul_artikel         = $_POST['judul_artikel'];
        $desk_artikel          = $_POST['desk_artikel'];
        $link_youtube       = $_POST['link_youtube'];
        $foto_nama = $_FILES['gambar_artikel']['name'];
        $foto_size = $_FILES['gambar_artikel']['size'];

    }else{
        header("location:data-artikel.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size > 2097152) {
       // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:data-artikel.php?pesan=size");

    }else{

       // Mengecek apakah Ada file yang diupload atau tidak
       if ($foto_nama != "") {

          // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
          $ekstensi_izin = array('png','jpg','jpeg');
          // Memisahkan nama file dengan Ekstensinya
          $pisahkan_ekstensi = explode('.', $foto_nama); 
          $ekstensi = strtolower(end($pisahkan_ekstensi));
          // Nama file yang berada di dalam direktori temporer server
          $file_tmp = $_FILES['gambar_artikel']['tmp_name'];   
          // Membuat angka/huruf acak berdasarkan waktu diupload
          $tanggal = rand();
          // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $tanggal.'-'.$foto_nama; 

          // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT gambar_artikel FROM artikel WHERE id_artikel='$id'";
            $data_foto = mysqli_query($koneksi, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("../../upload/".$foto_lama['gambar_artikel']);    

            // Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, '../../upload/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($koneksi, "UPDATE artikel SET judul_artikel = '$judul_artikel', desk_artikel = '$desk_artikel', link_youtube = '$link_youtube', gambar_artikel = '$foto_nama_new' WHERE id_artikel = '$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:data-artikel.php?pesan=berhasil");
            } else {
                header("location:data-artikel.php?pesan=gagal");
            }

        } else { 
            // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
            header("location:data-artikel.php?pesan=ekstensi");        }

        }else{

        // Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($koneksi, "UPDATE artikel SET judul_artikel = '$judul_artikel', desk_artikel = '$desk_artikel', link_youtube = '$link_youtube' WHERE id_artikel = '$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:data-artikel.php?pesan=berhasil");
            }else {
                header("location:data-artikel.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:data-artikel.php");
}
?>