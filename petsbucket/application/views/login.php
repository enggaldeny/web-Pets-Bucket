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
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/style/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/style/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="usaha" required placeholder="Nama Perusahaan" autofocus>
		            <br>
		            <input type="password" class="form-control" name="passwd" required placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="<?php echo base_url().'index.php/page/daftar'?>"> Buat Akun</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block"  type="submit" name="login"><i class="fa fa-lock"></i> SIGN IN</button></a>
		            <hr>
                    <div class="login-social-link centered">
		            <p>Kunjungi Kami di</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/style/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/style/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/style/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url()?>assets/style/img/bg.png", {speed: 500});
    </script>


  </body>
</html>
