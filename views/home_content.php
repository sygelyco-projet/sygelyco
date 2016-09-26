              
            <div class="row">
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
                                      <h3><b>"<?php echo citation1; ?>"</b></h3>
                                      <small class="">Voltaire <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" <?php echo citation2; ?> "</b></h3>
                                      <small class="">DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
                                  <div class="item text-center">
                                      <h3><b> "<?php echo citation3; ?>" </b></h3>
                                      <small class="">BILL MOYERS <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" <?php echo citation4; ?> "</b></h3>
                                      <small class="">DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
                                  </div>
								  <div class="item text-center">
                                      <h3> <b>" <?php echo citation5; ?> "</b></h3>
                                      <small class="">DAK-OSFT <img style="height:20px; width:20px" alt="" src="../public_files/img/plume.png"></small>
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