<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ujian Online</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assetss/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assetss/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assetss/css/custom.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assetss/js/bootstrap.min.js"></script>
     <!-- GOOGLE FONTS-->
</head>
<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('<?php echo base_url()?>assets/img/bg1.jpg');">
    <div class="container">
        <?php $this->load->view('menu');?> <!--Include menu-->
        <!-- /. NAV TOP  -->
        <center><p style="font-size: 30px;color: white"><b>A</b><b>H</b>ow<b>F</b>uture</p></center>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="text-align: center;">Pengajar</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-red">
                                  <a type="button" data-toggle="modal" data-target="#myModal" href="#">UPLOAD MATERI & SOAL</a>
                                  <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <button class="btn-info"><a style="color:black" href="<?php echo base_url();?>index.php/upload/saintek">SAINTEK</a></button>
                                          <button class="btn-warning"><a style="color:black" href="<?php echo base_url();?>index.php/upload/soshum">SOSHUM</a></button>
                                          <button class="btn-info"><a style="color:black" href="<?php echo base_url();?>index.php/upload/campuran">CAMPURAN</a></button>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a style="color:white" href="<?php echo base_url();?>index.php/ctrl_pengajar/tampil">IDENTITAS MAHASISWA</a>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-3 col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a style="color:white" href="<?php echo base_url();?>index.php/#">PESERTA</a>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="col-sm-4 col-xs-6">           
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-file-text-o fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                <a type="button" data-toggle="modal" data-target="#myModal1" href="#">DOWNLOAD MATERI</a>
                                  <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <button class="btn-info"><a style="color:black" href="<?php echo base_url();?>index.php/upload/saintek/download">SAINTEK</a></button>
                                          <button class="btn-warning"><a style="color:black" href="<?php echo base_url();?>index.php/upload/soshum/download">SOSHUM</a></button>
                                          <button class="btn-info"><a style="color:black" href="<?php echo base_url();?>index.php/upload/campuran/download">CAMPURAN</a></button>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
		        </div>
            </div>
        </div>
                
    
    <script src="<?php echo base_url();?>asset/js/jquery-1.10.2.js"></script>
      
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
   
    
   
</body>
</html>

<!--<a style="color:white" href="<?php echo base_url();?>index.php/upload/campuran">UPLOAD MATERI SOAL</a>-->