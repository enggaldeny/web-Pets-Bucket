<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>PetS Bucket</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/style/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/style/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/style/css/dataTables.bootstrap.css">
      <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/style/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/style/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>
      <section id="container" >
          <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>&nbsp;&nbsp;Pelapak PetS Bucket</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i>&nbsp;&nbsp;Setting Akun</a></li>
                    <li><a class="logout" href="<?php echo base_url().'index.php/page/logout'?>"><i class="fa fa-reply"></i>&nbsp;&nbsp;Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>assets/style/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $this->session->userdata("usaha"); ?></h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo base_url().'index.php/page/cHome'?>" class="<?php if($class=="active"){echo $class;}?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'index.php/page/cProfil'?>" class="<?php //if($class=="active"){echo $class;}?>">
                          <i class="fa fa-truck"></i>
                          <span>Profil Usaha</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cubes"></i>
                          <span>Produk</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo base_url().'index.php/page/cPakan'?>"><i class="fa fa-cutlery"></i>&nbsp;Pakan Hewan</a></li>
                          <li><a href="#"><i class="fa fa-paw"></i>&nbsp;Aksesoris</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
          
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-user"></i>&nbsp;&nbsp;Setting Akun</h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-info">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  