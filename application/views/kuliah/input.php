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
          <h3 align="center"><b>MASUKAN UNIVERSITAS</b></h3>
           <div class="jumbotron col-md-6" style="margin-left: 270px">
             <form method="post" action="<?php echo base_url('index.php/universitas_add/insert'); ?>">
              <div class="form-group">
                <label for="nama_universitas">Nama Universitas :</label>
                <input type="text" name="nama_universitas" class="form-control" placeholder="nama_universitas" id="nama_universitas" required>
              </div>
              <div class="form-group">
                <label for="total_prodi">Total Prodi :</label>
                <input type="number" name="total_prodi" class="form-control" placeholder="total_prodi" id="total_prodi" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" class="form-control" placeholder="alamat" id="alamat" required>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" id="deskripsi" required>
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