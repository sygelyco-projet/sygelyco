<link href="public_files/css/myheadcss.css" rel="stylesheet">
 <script src="public_files/ours_js/header.js"></script>
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="#" class="logo">LOGO<span class="lite">LYCEE</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="<?php echo rechercher; ?>" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>
             <span class="school_name"><?php echo bienvenue; ?>.</span>
	
            <div class="top-nav notification-row"> 
		
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
            <li>
			

				<select  class="form-control" style="height:35px" name="lang_index" id="lang_index">
               	 <?php

				 if (isset($_GET['lang'])){// on charge la liste deroulante en fonction de la langue choisie
				 
					 if ($_GET['lang']=='esp') {
						?>
										<option value="esp">espanol</option>
										<option value="fr">Francais</option>
										<option value="en">english</option>
						<?php
					 } 
					 
					 else if ($_GET['lang']=='en') {  
						?>
										<option value="en">english</option>
										<option value="esp">espanol</option>
										<option value="fr">Francais</option>
						<?php
					 }
					 else {                       
						?>
										<option value="fr">Francais</option>
										<option value="en">english</option>
										<option value="esp">espanol</option>
						<?php
					 }
				 
				 }else {                      
						?>
										<option value="fr">Francais</option>
										<option value="en">english</option>
										<option value="esp">espanol</option>
						<?php
				 }
				 
				?>
			
			</select>
			
			
			
			
			
			<p><i class="fa fa-phone-square"></i>+0123 456 70 90</p>
            </li>  
            
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                    <!--
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="Public_files/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-2">
                          <?php echo bouton_connection; ?>.
                        </button>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>

            <!-- Button trigger modal -->

             
      </header>      
      <!--header end-->

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                              <p class="login-img"><?php echo titre; ?><i class="icon_lock_alt"></i></p>
                                          </div>
                                          <div class="modal-body">
  
        <form class="form-inline" name="connexionForm" id="connexionForm" action="#" method="post" >        
        <div class="login-wrap">
            <p>		    
			<span id="erreur">
			</span><!-- span qui contiendra les éventuels messages d'erreur -->
		    </p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="<?php echo nom_user; ?>" name="login" id="login" autofocus required/>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="<?php echo passe_user; ?>" required/>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> <?php echo se_rappeler; ?>
            </label>
            <center><button class="btn btn-info btn-circle btn-xl" style="width: 40%"><?php echo titre; ?></button></center>
		<span class="pull-left" > <a href="#" id="label_passe_oublie"> <?php echo passe_oublie; ?></a></span>
			
        </div>
      </form>
			
			
			<span id="div_passe_oublie">	</span><!-- span qui contiendra les éventuels messages d'erreur -->

                                          </div>

                                      </div>
                                  </div>
                              </div>
							  




							  
						
							  
							  