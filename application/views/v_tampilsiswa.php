<!DOCTYPE html>
<html>
  <head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
 
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
 
    <div class="container">
    <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <center><h2>Data Siswa</h2></center>
          <center><?php echo anchor('ctrl_admin/tambah','Tambah Data'); ?></center><br>
          <table class="table table-striped table-bordered">
            <tr>
              <th>Id Siswa</th>
              <th>Nama</th>
              <th>Tgl Lahir</th>
              <th>Asal Sekolah</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>NO HP</th>
              <th>Id Bimbel</th>
              <th>Action</th>
            </tr>
            <?php 
            foreach($tbl_siswa as $s){ 
            ?>
            <tr>
              <td><?php echo $s->id_siswa ?></td>
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
            <?php } ?>
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