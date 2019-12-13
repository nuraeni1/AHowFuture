<!DOCTYPE html>
<html>
  <head>
    <title>Data Jurusan</title>
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
          <h3 align="center"><b>MASUKAN DATA SISWA</b></h3>
           <div class="jumbotron col-md-6" style="margin-left: 270px">
             <form method="post" action="<?php echo base_url('index.php/ctrl_admin/insert_dtsbmbl'); ?>">
              <div class="form-group">
                <label for="nama_siswa">Nama Siswa :</label>
                <input type="text" name="nama_siswa" class="form-control" placeholder="nama_siswa" id="nama_siswa" required>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir Siswa :</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="tgl_lahir" id="tgl_lahir" required>
              </div>
              <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah :</label>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="asal_sekolah" id="asal_sekolah" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" class="form-control" placeholder="alamat" id="alamat" required>
              </div>
              <div class="form-group">
                <label for="email_siswa">Email :</label>
                <input type="text" name="email_siswa" class="form-control" placeholder="email_siswa" id="email_siswa" required>
              </div>
              <div class="form-group">
                <label for="nohp_siswa">No HP :</label>
                <input type="text" name="nohp_siswa" class="form-control" placeholder="nohp_siswa" id="nohp_siswa" required>
              </div>
              <div class="form-group">
                <label for="id_grupbimbel">ID Grup Bimbel :</label>
                <input type="text" name="id_grupbimbel" class="form-control" placeholder="id_grupbimbel" id="id_grupbimbel" required>
              </div>
                 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </form>
           </div>
        </div>  
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>