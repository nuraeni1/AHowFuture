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
              <?php foreach($jurusan as $u){ ?>
                <form action="<?php echo base_url(). 'index.php/ctrl_admin/update_jrs'; ?>" method="post">
                  <table style="margin:20px auto;color: white;" class="table">
                    <tr>
                      <td>Nama Jurusan</td>
                      <td><input type="hideen" name="id_jurusan" class="form-control" value="<?php echo $u->id_jurusan ?>"></td>
                      <td><input type="text" name="nama_jurusan" class="form-control" value="<?php echo $u->nama_jurusan ?>"></td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td><input type="text" name="keterangan" class="form-control" value="<?php echo $u->keterangan ?>"></td>
                    </tr>
                    <tr>
                      <td>Prospek Kerja</td>
                      <td><input type="text" name="prospek_kerja" class="form-control" value="<?php echo $u->prospek_kerja ?>"></td>
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
      </div>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>