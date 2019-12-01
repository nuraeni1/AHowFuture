<!DOCTYPE html>
<html>
  <head>
    <title>Data Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
 
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
 
    <div class="container" class="md-form">
    <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <center><h2>Data Siswa</h2></center>
          <center><?php echo anchor('ctrl_admin/tambah_aksi','Tambah Data'); ?></center><br>
          <?php foreach($tbl_siswa as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/ctrl_admin/update'; ?>" method="post">
              <table style="margin:20px auto;color: white;" class="table">
                <tr>
                  <td>Id Siswa</td>
                  <td><input type="text" name="id_siswa" class="form-control" value="<?php echo $u->id_siswa ?>"></td>
                </tr>
                <tr>
                  <td>Nama</td> 
                  <td><input type="text" name="nama_siswa" class="form-control" value="<?php echo $u->nama_siswa ?>"></td>
                </tr>
                <tr>
                  <td>Tgl Lahir</td>
                  <td><input type="text" name="tgl_lahir" class="form-control" value="<?php echo $u->tgl_lahir ?>"></td>
                </tr>
                <tr>
                  <td>Asal Sekolah</td>
                  <td><input type="text" name="asal_sekolah" class="form-control" value="<?php echo $u->asal_sekolah ?>"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" name="email_siswa" class="form-control" value="<?php echo $u->email_siswa ?>"></td>
                </tr>
                <tr>
                  <td>No HP</td>
                  <td><input type="text" name="nohp_siswa" class="form-control" value="<?php echo $u->nohp_siswa ?>"></td>
                </tr>
                <tr>
                  <td>Id Grup Bimbel</td>
                  <td><input type="text" name="id_grupbimbel" class="form-control" value="<?php echo $u->id_grupbimbel ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" class="form-control" value="Simpan"></td>
                </tr>
              </table>
            </form> 
          <?php } ?>
        </div>
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>