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
          <h3 align="center"><b>MASUKAN Jurusan</b></h3>
           <div class="jumbotron col-md-6" style="margin-left: 270px">
             <form method="post" action="<?php echo base_url('index.php/ctrl_admin/insert_jrs'); ?>">
              <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan :</label>
                <input type="text" name="nama_jurusan" class="form-control" placeholder="nama_jurusan" id="nama_jurusan" required>
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <input type="text" name="keterangan" class="form-control" placeholder="keterangan" id="keterangan" required>
              </div>
              <div class="form-group">
                <label for="prospek_kerja">Prospek Kerja :</label>
                <input type="text" name="prospek_kerja" class="form-control" placeholder="prospek_kerja" id="prospek_kerja" required>
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