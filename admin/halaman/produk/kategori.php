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
            <h1 class="m-0">Kategori Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Kategori Produk</li>
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
                <h3 class="card-title">Form Kategori Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body row" >

              
                <div class="col-sm-2">
                  <form action="simpan-kategori.php" method="POST">
                    <div class="form-group">
                    <label class="lable">Nama Kategori</label>
                    <br>
                    <input class="form-control" type="text" name="nama_kategori">
                    <br>
                    <button class="btn btn-primary" type="submit">SIMPAN</button>
                  </div>
                  </form>
                </div>




                <div class="col-sm-10">
                  <div class="form-group">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                <?php
                  include('../../../komponen/koneksi.php');
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM kategori');                                
                  
                  $result = array(); 
                  while ($data = mysqli_fetch_array($query)) {
                  $result[] = $data; //result dijadikan array 
                  }                
                  //selanjutnya result array di foreach
                  foreach ($result as $kategori){                                
                ?>

                  <tr>
                    <td><?= $kategori['nama_kategori'] ?></td>
                    <td>
                      <a href="edit-kategori.php?id=<?= $kategori['id_kategori']?>" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="hapus-kategori.php?id=<?= $kategori['id_kategori']?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>

                <?php } ?>
                 
                  </tbody>
                 
                </table>
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

   </div><!-- /.container-fluid -->
    </section>
  </div>



<?php include('../../komponen/footer.php') ?>