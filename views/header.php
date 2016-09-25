<<<<<<< HEAD
   
      <header class="header dark-bg">
=======
 <link href="../Public_files/css/myheadcss.css" rel="stylesheet">
  <header class="header dark-bg">
>>>>>>> 754b05acc79bb42065c724d26ab21fd5e11f6a03
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="../public_files/index.html" class="logo">LOGO <span class="lite">LYCEE</span></a>
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
            <div class="top-nav notification-row"> 					
				<!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                                <li>
			
				<select  class="form-control" style="height:35px; margin-top:5px" name="lang_home" id="lang_home">
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
            </li> 
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="../public_files/#">
                            <span class="profile-ava">
                                <img alt="" src="../public_files/img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['user']['login']?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> <?php echo mon_profile; ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> <?php echo mes_messages; ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> <?php echo chats; ?></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_key_alt"></i> <?php echo aide; ?></a>
                            </li>
							<li>
                                <a href="../controller/logout.php?lang=<?php echo $_GET['lang']; ?>"><i class="icon_key_alt"></i><?php echo deconnexion; ?></a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
	  
	<script >  
	  $(document).ready( function () {

  $("#lang_home").on('change', function() {
   var lang = $(this).val(); // on récupère la lang
  $.ajax({
     data: "lang="+lang,
     success: function(msg){
    window.location='home.php?lang='+lang;
     }
  });
 });
 
});
</script>