<!DOCTYPE html>
<html>
  <head>
    <title>soshum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/chat.css') ?>">
    <link href="<?php echo base_url();?>assetss/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assetss/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assetss/css/custom.css" rel="stylesheet" />
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
 
 
  </head>
  <body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
 
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <center><p style="font-size: 30px;color: white"><b>A</b><b>H</b>ow<b>F</b>uture</p></center>
      <div id="page-wrapper" >
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="row" style="margin-left: 430px">
                <h1>SOSHUM</h1>
          			<form href="<?php echo base_url().'index.php/upload/soshum/download/'?>">
                  <?php
                  $no=1;
                  foreach($files as $key=>$file_name)
                  {
                    echo "<tr><td>$no.</td><td><input type='checkbox' name='files[]' value=‘ “.$file_name.“ ‘ /></td><td>".$file_name."</td></tr><br>";
                  $no++;
                  }
                  ?>
                  <br>
                  <input value="Download" id="download" type="submit">
                </form>				
				      </div>    
            </div>
        </div>              
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>