 <?php
 require '../connexionBD/connexionBD.php';
 require '../controller/session.php';
  if (!isset($_SESSION['user']))
{
if(!isset($_GET['lang']))  $_GET['lang']='fr'; 
$url='../index.php?lang='.$_GET['lang']; 
header('Refresh:0;'.$url.'');
}
  ?>
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
	<link href="../public_files/css/sb-admin-2.css" rel="stylesheet">
		<script src="../Public_files/js/jquery-1.8.3.min.js"></script>
  </head>

  <body>

  
   <?php 
   if (isset($_SESSION['user'])) {
   include("../lang/decide-lang.php"); if(!isset($_GET['lang']))  $_GET['lang']='fr'; 
   include("header.php"); 
   include("menu.php"); // charge dynamiquement en fonction des droits   
   ?>
         <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> <?php echo tableau_de_bord; ?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php?lang=<?php echo $_GET['lang']; ?>">
						<?php echo menu1; ?></a></li>
						<li><i class="fa fa-laptop"></i>
				<?php
				if(isset($_GET['menu'])){
					if ($_GET['menu']=='help') echo aide;
					else if ($_GET['menu']=='enregistrement_eleve') echo module1_enregistrement.'>'.enregistrement_eleve;
					else if ($_GET['menu']=='enregistrement_personnel') echo module1_enregistrement.'>'.enregistrement_personnel;
					else if ($_GET['menu']=='enregistrement_utilisaeur') echo module1_enregistrement.'>'.enregistrement_utilisaeur;
					else if ($_GET['menu']=='enregistrement_cycle') echo module1_enregistrement.'>'.enregistrement_cycle;
					else if ($_GET['menu']=='enregistrement_classe') echo module1_enregistrement.'>'.enregistrement_classe;
					else if ($_GET['menu']=='enregistrement_matiere') echo module1_enregistrement.'>'.enregistrement_matiere;
					else if ($_GET['menu']=='enregistrement_sequence') echo module1_enregistrement.'>'.enregistrement_sequence;
					else if ($_GET['menu']=='enregistrement_grade') echo module1_enregistrement.'>'.enregistrement_grade;
					else if ($_GET['menu']=='enregistrement_statu') echo module1_enregistrement.'>'.enregistrement_statu;
					else if ($_GET['menu']=='enregistrement_droit') echo module1_enregistrement.'>'.enregistrement_droit;
					else if ($_GET['menu']=='enregistrement_sanction') echo module1_enregistrement.'>'.enregistrement_sanction;
				
				}else {echo tableau_de_bord; }
				?>					
						
						</li>						  	
					</ol>
				</div>
			</div>
				
				<?php
				if(isset($_GET['menu'])){
					if ($_GET['menu']=='help') include("help/help.php");
					if ($_GET['menu']=='enregistrement_eleve') include("enregistrements/enregistrement_eleve.php");
					if ($_GET['menu']=='enregistrement_personnel') include("enregistrements/enregistrement_personnel.php");
					if ($_GET['menu']=='enregistrement_utilisaeur') include("enregistrements/enregistrement_utilisaeur.php");
					if ($_GET['menu']=='enregistrement_cycle') include("enregistrements/enregistrement_cycle.php");
					if ($_GET['menu']=='enregistrement_classe') include("enregistrements/enregistrement_classe.php");
					if ($_GET['menu']=='enregistrement_matiere') include("enregistrements/enregistrement_matiere.php");
					if ($_GET['menu']=='enregistrement_sequence') include("enregistrements/enregistrement_sequence.php");
					if ($_GET['menu']=='enregistrement_grade') include("enregistrements/enregistrement_grade.php");
					if ($_GET['menu']=='enregistrement_statu') include("enregistrements/enregistrement_statu.php");
					if ($_GET['menu']=='enregistrement_droit') include("enregistrements/enregistrement_droit.php");
					if ($_GET['menu']=='enregistrement_sanction') include("enregistrements/enregistrement_sanction.php");
				
				}else {include("home_content.php"); }
				?>
          </section>
      </section>
      <!--main content end-->
   
	<?php 
   include("../footer_index.php"); 
   }
   ?>

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
