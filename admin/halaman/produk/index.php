<?php 

include('../../komponen/header.php');
include('../../komponen/navbar.php');
include('../../komponen/sidebar.php');

?>

<div class="content-wrapper" style="min-height: 553px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Data Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   



<section class="content">
      <div class="container-fluid">
        
   

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Tanaman</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                <?php
                  include('../../../komponen/koneksi.php');
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM produk join kategori where kategori.id_kategori = produk.id_kategori');                                
                  
                  $result = array(); 
                  while ($data = mysqli_fetch_array($query)) {
                  $result[] = $data; //result dijadikan array 
                  }                
                  //selanjutnya result array di foreach
                  foreach ($result as $produk){                                
                ?>

                  <tr>
                    <td><?= $produk['judul'] ?></td>
                    <td><?= $produk['nama_kategori'] ?></td>
                    <td><?= $produk['desk'] ?></td>
                    <td><?= $produk['harga'] ?></td>
                    <td><?= $produk['stok'] ?></td>
                    <td><?= $produk['gambar'] ?></td>
                    <td>
                      <a href="edit.php?id=<?= $produk['id_produk']?>" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="hapus-produk.php?id=<?= $produk['id_produk']?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>

                <?php } ?>
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

   </div><!-- /.container-fluid -->
    </section>
  </div>

  

<?php include('../../komponen/footer.php') ?>