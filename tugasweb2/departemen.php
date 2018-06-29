<?php

require_once "core/init.php";
require_once "view/header.php";

function rupiah($nilai, $pecahan = 0) {
    return number_format($nilai, $pecahan, ',', '.');
}
?>
<link rel="stylesheet" href="css/style1.css" type="text/css" />

<div class="container">
  <div class="row" style="margin-top:50px;">
       <h2 class="text-center"><font face="arial black">Data Karyawan</font></h2>
  </div>

 <div class="container-fluid" style="margin:50px 10px 50px 10px;">
   <div class="row">

     <div class="col-md-3">
       <form method="get">
         <div class="form-group">
           <select name="filter" onchange="form.submit()" class="form-control">
              <option value="0">-Filter Berdasarkan Divisi-</option>
              <?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
              <option value="" <?php echo 'desc data_karyawan';  ?>>Semua Divisi</option>
              <option value="Gudang" <?php if($filter == 'Gudang'){ echo 'selected'; } ?>>project manager</option>
              <option value="Marketing" <?php if($filter == 'Marketing'){ echo 'selected'; } ?>>programer</option>
              <option value="Information Technology" <?php if($filter == 'Information Technology'){ echo 'selected'; } ?>>IT support</option>
              <option value="Keuangan" <?php if($filter == 'Keuangan'){ echo 'selected'; } ?>>Ob</option>
              <option value="Costomer Service" <?php if($filter == 'Costomer Service'){ echo 'selected'; } ?>>Customer Service</option>
              
           </select>
         </div>
       </form>
     </div>
   </div>
   <hr>
   
   <div class="row">
     <div class="table-responsive">
       <table class="table table-striped table-hover">
         <tr>
           <th><center>No</center></th>
           <th><center>NIP</center></th>
           <th><center>Nama Karyawan</center></th>
           <th><center>jabatan</center></th>
           <th><center>Jenis Kelamin</center></th>
           <th><center>Alamat</center></th>
           <th><center>No Telepon</center></th>
           <th><center>Status</center></th>
           <th><center>Tools</center></th>
         </tr>
         <?php
         error_reporting(0);
          if ($filter) {
            $sql = tampil_departemen($filter);
          } 

          else{
            $halaman = 20;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = tampil_urut();
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);
            $sql = mysqli_query($link,"SELECT * FROM data_karyawan ORDER BY nama ASC LIMIT $mulai, $halaman")or die(mysql_error);
          }
          $no = $mulai + 1;
          while ($row = mysqli_fetch_assoc($sql)) :?>
         <tr align="center">
            <td><?= $no; ?></td>
            <td><h5><?= $row['nip']; ?></h5></td>
            <td><a href="#" ><?= $row['nama'];?></a></td>
            <td><?= $row['jabatan']; ?></td>
            <td></a><?= $row['jns_kel']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_telp']; ?></td>
            <td>
              <?php
              if($row['status'] == 'Tetap'){
                echo '<span class="label label-info">Tetap</span>';
              }
              else if ($row['status'] == 'Kontrak' ){
                echo '<span class="label label-default">Kontrak</span>';
              }
               ?>
            </td>
           <td><a class="btn btn-success btn-sm" href="edit.php?nip=<?= $row['nip']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
               <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')" href="hapus.php?nip=<?= $row['nip']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
           </td>
         </tr>
         <?php
          $no++;
          endwhile; ?>
       </table>
     </div>
     <div class="text-center">
       <ul class="pagination">
         <?php for ($i=1; $i<=$pages ; $i++){ ?>
         <li><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
         <?php } ?>
       </ul>
     </div>
   </div>
 </div>
</div>

  <?php
  require_once "view/footer.php";

  ?>
