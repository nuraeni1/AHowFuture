<!DOCTYPE html>
<html>
  <head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <style>
    .file {
      visibility: hidden;
      position: absolute;
    }
    </style>
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
 
    <div class="container" class="md-form">
    <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <center><h2 style="color: white">Data Siswa</h2></center>
          <center><button class="btn-info" style="height: 30px"><?php echo anchor('ctrl_admin/tambah_dtsbmbl','Tambah Data'); ?></button></center><br>
          <table class="table table-striped table-bordered">
            <tr>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>Tanggal Lahir</th>
              <th>Asal Sekolah</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>No Hp</th>
              <th>ID Grup Bimbel</th>
              <th>Option</th>
            </tr>
            <?php 
            $i=1;
            foreach($tbl_siswa as $s){ 
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $s->nama_siswa ?></td>
              <td><?php echo $s->tgl_lahir ?></td>
              <td><?php echo $s->asal_sekolah ?></td>
              <td><?php echo $s->alamat ?></td>
              <td><?php echo $s->email_siswa ?></td>
              <td><?php echo $s->nohp_siswa ?></td>
              <td><?php echo $s->id_grupbimbel ?></td>
              <td>
                  <?php echo anchor('ctrl_admin/edit/'.$s->id_siswa,'Edit'); ?>
                  <?php echo anchor('ctrl_admin/hapus/'.$s->id_siswa,'Hapus'); ?>
              </td>
            </tr>
            <?php $i++;}?>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>