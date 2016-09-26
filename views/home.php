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

			                      <!--carousel start-->
                      <section class="panel">
                          <div style="color:#FFF; background-color:#666" id="c-slide" class="carousel slide auto panel-body">
                              <ol class="carousel-indicators out">
                                  <li class="active" data-slide-to="0" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="1" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="2" data-target="#c-slide"></li>
								  <li class="" data-slide-to="3" data-target="#c-slide"></li>
								  <li class="" data-slide-to="4" data-target="#c-slide"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item text-center active">
                                      <h3><b>" L'originalité n'est rien qu'une judicieuse imagination. "</b></h3>
                                      <small class="">By Voltaire <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" Les deux secrets d'un succès : la Qualité et la Créativité. "</b></h3>
                                      <small class="">By DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
                                  <div class="item text-center">
                                      <h3><b> " La créativité c’est percer le banal pour trouver le merveilleux. " </b></h3>
                                      <small class="">By BILL MOYERS <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" Créer vos établissements et laisser nous le numériser avec une créativité sans pareil. "</b></h3>
                                      <small class="">By DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" Concevoir c’est bien mai réaliser c’est encore mieux. "</b></h3>
                                      <small class="">By DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
                              </div>
                              <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="arrow_carrot-left_alt2"></i>
                              </a>
                              <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="arrow_carrot-right_alt2"></i>
                              </a>
                          </div>
                      </section>
                      <!--carousel end-->
					<!-- Modal -->
                      
			<!-- les carre -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="panel panel-bleu">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 1</div>
                                    <div>Lycée</div>
                                </div>
                            </div>
                        </div>
                        <a data-toggle="modal" data-target="#myModal">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div> 
                </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Module 1 : Gestion de vos lycée</h4>
      </div>
      <div class="modal-body">
       <pre class="prettyprint linenums">
<h5 align="center"><b>Bienvenue dans la configuration de vos établissements</b></h5>
Ce module vous permet entre autre de :
1.	Créer un nouveau  lycée : <a href="" title="Créer un nouveau  lycée">Créer un nouveau  lycée</a>
<br>
2.	Modifier un lycée déjà crée : <a href="" title="Modifier un lycée déjà crée">Modifier un lycée déjà crée</a>
<br>
3.	Supprimer un lycée : <a href="" title="Supprimer un lycée">Supprimer un lycée</a>
<br>
4.	Configurer un lycée déjà crée : <a href="" title="Configurer un lycée déjà crée">Configurer un lycée déjà crée</a>
</pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <span class="profile-ava">
                                <img style="height:40px; width:40px" alt="icone" src="../public_files/img/iconSYGELYCO.png">
                            </span>
      </div>
    </div>
  </div>
</div>
<!-- Modal fin -->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 2</div>
                                    <div>Année académique</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 3</div>
                                    <div>Personnels</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 4</div>
                                    <div>Etudiants</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
			<!-- ligne 2 -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="panel panel-nuit">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 5</div>
                                    <div>Bulletins</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-maron">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 6</div>
                                    <div>SMS</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-bleu2">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 7</div>
                                    <div>Parametres</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-gris">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-family:'Times New Roman', Times, serif; font-size:22px" class="huge">Module 4</div>
                                    <div>Actualitées</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Détails</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
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
