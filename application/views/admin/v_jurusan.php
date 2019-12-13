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
          <center><h2 style="color: white">Data Jurusan</h2></center>
          <center><button class="btn-info" style="height: 30px"><?php echo anchor('ctrl_admin/tambah_jrs','Tambah Data'); ?></button></center><br>
          <table class="table table-striped table-bordered">
            <tr>
              <th>No</th>
              <th>Nama Jurusan</th>
              <th>Keterangan</th>
              <th>Prospek Kerja</th>
              <th>Option</th>
            </tr>
            <?php 
            $i=1;
            foreach($jurusan as $s){ 
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $s->nama_jurusan ?></td>
              <td><?php echo $s->keterangan ?></td>
              <td><?php echo $s->prospek_kerja ?></td>
              <td>
                  <?php echo anchor('ctrl_admin/edit_jrs/'.$s->id_jurusan,'Edit'); ?>
                  <?php echo anchor('ctrl_admin/hapus_jrs/'.$s->id_jurusan,'Hapus'); ?>
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