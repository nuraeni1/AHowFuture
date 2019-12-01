<!DOCTYPE html>
<html>
  <head>
    <title>Input Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
 
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <h2>Laporan Hasil Studi</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nama Universitas</th>
                <th>Total Prodi</th>
                <th>Akreditas</th>
                <th>Daya Tampung</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Universitas Trunojoyo Madura</td>
                <td>30</td>
                <td>A</td>
                <td><button class="btn btn-info btn-xs">Cek</button></td>
              </tr>
              <tr>
                <td>Universitas Trunojoyo Madura</td>
                <td>30</td>
                <td>A</td>
                <td><button class="btn btn-info btn-xs">Cek</button></td>
              </tr>
              
            </tbody>
 
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