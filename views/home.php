<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../public_files/img/favicon.png">

	<title>SYGELYCO</title>
	<link rel="shortcut icon" href="../public_files/img/iconSYGELYCO.png">
    <!-- Bootstrap CSS -->    
    <link href="../public_files/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../public_files/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../public_files/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../public_files/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="../public_files/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../public_files/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../public_files/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../public_files/css/owl.carousel.css" type="text/css">
	<link href="../public_files/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="../public_files/css/fullcalendar.css">
	<link href="../public_files/css/widgets.css" rel="stylesheet">
    <link href="../public_files/css/style.css" rel="stylesheet">
    <link href="../public_files/css/style-responsive.css" rel="stylesheet" />
	<link href="../public_files/css/xcharts.min.css" rel=" stylesheet">	
	<link href="../public_files/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<script src="../Public_files/js/jquery-1.8.3.min.js"></script>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
   <?php include("../lang/decide-lang.php"); ?>
     <?php include("header.php"); ?>
	 <?php include("menu.php"); // charge dynamiquement en fonction des droits    ?>

      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> <?php echo tableau_de_bord; ?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php?lang=<?php echo $_GET['lang']; ?>"><?php echo menu1; ?></a></li>
						<li><i class="fa fa-laptop"></i><?php echo tableau_de_bord; ?></li>						  	
					</ol>
				</div>
			</div>
              
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
				
				
			</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-md-6 portlets">
            <div class="panel panel-default">
				<div class="panel-heading">
                  <h2><strong><?php echo calandrier; ?></strong></h2>
				<div class="panel-actions">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>  
                 
                </div><br><br><br>
                <div class="panel-body">
                  <!-- Widget content -->
                  
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                  
                </div>
              </div> 
               
            </div>
			
				 <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left"><?php echo actualites; ?></div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
  
    <?php include("../footer_index.php"); ?>

    <!-- javascripts -->
    <script src="../public_files/js/jquery.js"></script>
	<script src="../public_files/js/jquery-ui-1.10.4.min.js"></script>
    <script src="../public_files/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../public_files/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../public_files/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../public_files/js/jquery.scrollTo.min.js"></script>
    <script src="../public_files/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../public_files/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../public_files/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../public_files/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../public_files/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="../public_files/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="../public_files/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../public_files/js/calendar-custom.js"></script>
	<script src="../public_files/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../public_files/js/jquery.customSelect.min.js" ></script>
	<script src="../public_files/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../public_files/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../public_files/js/sparkline-chart.js"></script>
    <script src="../public_files/js/easy-pie-chart.js"></script>
	<script src="../public_files/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../public_files/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../public_files/js/xcharts.min.js"></script>
	<script src="../public_files/js/jquery.autosize.min.js"></script>
	<script src="../public_files/js/jquery.placeholder.min.js"></script>
	<script src="../public_files/js/gdp-data.js"></script>	
	<script src="../public_files/js/morris.min.js"></script>
	<script src="../public_files/js/sparklines.js"></script>	
	<script src="../public_files/js/charts.js"></script>
	<script src="../public_files/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
