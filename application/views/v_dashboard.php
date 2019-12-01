<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'https://fonts.googleapis.com/css?family=Lato:300,400,700'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/ionicons.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css'?>">
    <style>
    .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
    }
    .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
    }
    .bg-3 { 
      background-color: #fff; /* White */
      color: #555555;
    }
    </style>
  </head>

  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="container">
        <div class="row">
          <center>
          <h2>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h2>
          </center>
        </div>
      </div>
      <div class="container-fluid bg-1 text-center">
        <h3>Who Am I?</h3>
        <img src="<?php echo base_url().'assets/img/toga.jpg'?>" class="img-circle" alt="toga" width="350" height="350">
        <h3>I'm an Professor</h3>
      </div>

      <div class="container-fluid bg-2 text-center">
        <h3>What Am I?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>

      <div class="container-fluid bg-3 text-center">
        <h3>Where To Find Me?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      
        <footer class="footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
        </footer>
    </div> <!-- /container -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/theme.js'?>"></script>
  </body>
</html>