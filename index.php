  <?php 
  require 'connexionBD/connexionBD.php';
  require 'controller/session.php';
    if (isset($_SESSION['user']))
{

  $url=$home_path.'/views/home.php';
echo '<script>window.location.href ="'.$url.'";</script>';
}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="public_files/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="public_files/css/bootstrap-theme.css" rel="stylesheet">
    <link href="public_files/css/slide.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="public_files/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="public_files/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="public_files/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="public_files/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="public_files/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="public_files/css/owl.carousel.css" type="text/css">
	<link href="public_files/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="public_files/css/fullcalendar.css">
	<link href="public_files/css/widgets.css" rel="stylesheet">
    <link href="public_files/css/style.css" rel="stylesheet">
    <link href="public_files/css/style-responsive.css" rel="stylesheet" />
	<link href="public_files/css/xcharts.min.css" rel=" stylesheet">	
	<link href="public_files/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	<title>SYGELYCO</title>
	<link rel="shortcut icon" href="public_files/img/iconSYGELYCO.png">
	<script src="Public_files/js/jquery-1.8.3.min.js"></script>
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
		<?php include("lang/decide-lang.php"); ?>
		<?php include("header_index.php"); ?>
       <?php include("menu_index.php"); ?>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">       

 
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(Public_files/img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src2="Public_files/img/home/01.jpg" />
                </div>
                <div>
                    <img u="image" src2="Public_files/img/home/02.jpg" />
                </div>
                <div>
                    <img u="image" src2="Public_files/img/home/03.jpg" />
                </div>
                <div>
                    <img u="image" src2="Public_files/img/home/04.jpg" />
                </div>
            </div>
            
             <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
        </div>
        <!-- Jssor Slider End -->

        <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-cloud-download"></i>
						<div class="count"><span class="profile-ava">
                                <img alt="" src="Public_files/img/avatar1_small.jpg">
                            </span></div>
						<div class="title"><?php echo a_propos_lycee; ?></div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-cart"></i>
						<div class="count"><span class="profile-ava">
                                <img alt="" src="Public_files/img/avatar1_small.jpg">
                            </span></div>
						<div class="title"><?php echo a_propos_proviseur; ?></div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count">80%</div>
						<div class="title"><?php echo taux_reussite; ?></div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-cubes"></i>
						<div class="count">1.426</div>
						<div class="title"><?php echo moyenne_generale; ?></div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div>

          </section>
      </section>
      <!--main content end-->
  </section>					  

  <!-- container section start -->

  <?php include("footer_index.php"); ?>
 <?php include("footerscripts.php"); ?>
  </body>
  

</html>
