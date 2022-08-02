<?php 

//include koneksi database
include('../../../komponen/koneksi.php');
// Mengecek apakah ID ada datanya atau tidak
if (isset($_POST['id'])) {
    if ($_POST['id'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        //POST data dari form
        $id     = $_POST['id'];
        $judul_lelang         = $_POST['judul_lelang'];
        $jam_lelang          = $_POST['jam_lelang'];
        $tanggal_lelang       = $_POST['tanggal_lelang'];
        $grupwa       = $_POST['grupwa'];
        $foto_nama = $_FILES['gambar_lelang']['name'];
        $foto_size = $_FILES['gambar_lelang']['size'];

    }else{
        header("location:index.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size > 2097152) {
       // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:index.php?pesan=size");

    }else{

       // Mengecek apakah Ada file yang diupload atau tidak
       if ($foto_nama != "") {

          // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
          $ekstensi_izin = array('png','jpg','jpeg');
          // Memisahkan nama file dengan Ekstensinya
          $pisahkan_ekstensi = explode('.', $foto_nama); 
          $ekstensi = strtolower(end($pisahkan_ekstensi));
          // Nama file yang berada di dalam direktori temporer server
          $file_tmp = $_FILES['gambar_lelang']['tmp_name'];   
          // Membuat angka/huruf acak berdasarkan waktu diupload
          $tanggal = rand();
          // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $tanggal.'-'.$foto_nama; 

          // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $POST_foto = "SELECT gambar_lelang FROM lelang WHERE id_lelang='$id'";
            $data_foto = mysqli_query($koneksi, $POST_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("../../upload/".$foto_lama['gambar_lelang']);    

            // Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, '../../upload/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($koneksi, "UPDATE lelang SET judul_lelang = '$judul_lelang', jam_lelang = '$jam_lelang', tanggal_lelang = '$tanggal_lelang', grupwa = '$grupwa', gambar_lelang = '$foto_nama_new' WHERE id_lelang = '$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:index.php?pesan=berhasil");
            } else {
                header("location:index.php?pesan=gagal");
            }

        } else { 
            // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
            header("location:index.php?pesan=ekstensi");        }

        }else{

        // Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($koneksi, "UPDATE lelang SET judul_lelang = '$judul_lelang', jam_lelang = '$jam_lelang', tanggal_lelang = '$tanggal_lelang', grupwa = '$grupwa' WHERE id_lelang = '$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:index.php?pesan=berhasil");
            }else {
                header("location:index.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    header("location:index.php");
}
?>