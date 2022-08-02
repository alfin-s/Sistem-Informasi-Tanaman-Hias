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
            <h1 class="m-0">Data Lelang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Data Lelang</li>
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
                <h3 class="card-title">Tabel Data Lelang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Judul Lelang</th>
                    <th>Jam</th>
                    <th>Tanggal</th>
                    <th>Grup Wa</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                <?php
                  include('../../../komponen/koneksi.php');
                  $no = 1;
                  $query = mysqli_query($koneksi, 'SELECT * FROM lelang');                                
                  
                  $result = array(); 
                  while ($data = mysqli_fetch_array($query)) {
                  $result[] = $data; //result dijadikan array 
                  }                
                  //selanjutnya result array di foreach
                  foreach ($result as $lelang){                                
                ?>

                  <tr>
                    <td><?= $lelang['judul_lelang'] ?></td>
                    <td><?= $lelang['jam_lelang']?></td>
                    <td><?= $lelang['tanggal_lelang'] ?></td>
                    <td><?= $lelang['grupwa'] ?></td>
                    <td><?= $lelang['gambar_lelang'] ?></td>
                    <td>
                      <a href="edit-lelang.php?id=<?= $lelang['id_lelang']?>" class="btn btn-info">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="hapus-lelang.php?id=<?= $lelang['id_lelang']?>" class="btn btn-danger">
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