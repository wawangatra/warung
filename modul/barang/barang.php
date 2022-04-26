
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
<div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="app.php?page=barang_create" class="btn btn-block btn-default btn-lg">tambah</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>nomor</th>
                    <th>Nama Barang</th>
                    <th>Merek</th>
                    <th>Jumlah</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                  $no=1;  
                  $hasil=mysqli_query($kon,"SELECT * FROM barang");
while($baris=mysqli_fetch_array($hasil))
{   ?>
                  <tr>
                    <td><?php echo $no;   ?></td>
                    <td> <?php echo $baris['NamaBarang'];   ?> </td>
                    <td> <?php echo $baris['Merek'];   ?> </td>
                    <td> <?php echo $baris['Jumlah'];   ?> </td>
                    <td>X</td>
                  </tr>
<?php $no++; }  ?>
                
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>nomor</th>
                    <th>Nama Barang</th>
                    <th>Merek</th>
                    <th>Jumlah</th>
                    <th>aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>