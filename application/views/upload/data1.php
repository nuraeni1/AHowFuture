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
          <center><h2 style="color: white">Data Universitas</h2></center>
          <table class="table table-striped table-bordered">
            <tr>
              <th>Id Universitas</th>
              <th>Nama Universitas</th>
              <th>Total Prodi</th>
              <th>Alamat</th>
              <th>Deskripsi</th>
            </tr>
            <?php 
            $i=1;
            foreach($universitas as $s){ 
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $s->nama_universitas ?></td>
              <td><?php echo $s->total_prodi ?></td>
              <td><?php echo $s->alamat ?></td>
              <td><?php echo $s->deskripsi ?></td>
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