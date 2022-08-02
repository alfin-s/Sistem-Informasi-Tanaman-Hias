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
            <h1 class="m-0">Data Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Data Artikel</li>
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
                <h3 class="card-title">Tabel Data Artikel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Link Youtube</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                <?php
                  include('../../../komponen/koneksi.php');
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM artikel');                                
                  
                  $result = array(); 
                  while ($data = mysqli_fetch_array($query)) {
                  $result[] = $data; //result dijadikan array 
                  }                
                  //selanjutnya result array di foreach
                  foreach ($result as $artikel){                                
                ?>

                  <tr>
                    <td><?= $artikel['judul_artikel'] ?></td>
                    <td><?= $artikel['desk_artikel']?></td>
                    <td><?= $artikel['link_youtube'] ?></td>
                    <td><?= $artikel['gambar_artikel'] ?></td>
                    <td>
                      <a href="edit-artikel.php?id=<?= $artikel['id_artikel']?>" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="hapus-artikel.php?id=<?= $artikel['id_artikel']?>" class="btn btn-danger">
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