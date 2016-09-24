<link href="Public_files/css/myheadcss.css" rel="stylesheet">
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
                            <input class="form-control" placeholder="rechercher" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>
             <span class="school_name">BIENVENUE AU ..................</span>
	
            <div class="top-nav notification-row"> 
		
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
            <li>
			<select  class="form-control" style="height:35px" name="lang" id="lang">
									<option value="fr">Francais</option>
									<option value="en">english</option>
									<option value="esp">espanol</option>
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
                          Sign In
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
                                              <p class="login-img">connexion<i class="icon_lock_alt"></i></p>
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
              <input type="text" class="form-control" placeholder="Username" name="login" id="login" autofocus required/>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required/>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <center><button class="btn btn-primary btn-lg btn-block" style="width: 40%" type="submit">Login</button></center>
			<span class="pull-left"> <a href="#"> Forgot Password?</a></span>
        </div>
      </form>
		

                                          </div>

                                      </div>
                                  </div>
                              </div>
							  

<script type="text/javascript">
$(document).ready( function () {
	$("#connexionForm").submit( function() {							 
		$.ajax({
		   type: "POST",
		   url: "controller/login-verification.php",
		   data: "login="+$("#login").val()+"&pass="+$("#pass").val(),
		   success: function(msg){
				//alert(msg);
				if(msg==1) // si la connexion en php a fonctionnée
				{
				window.location="views/home.php";
				}
				else // si la connexion en php n'a pas fonctionnée
				{
					$("span#erreur").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Erreur lors de la connexion, v&eacute;rifier votre login et votre mot de passe.</div>');
					// on affiche un message d'erreur dans le span prévu à cet effet
				}
		   }
		});
		return false;
	});
});
</script>
							  
						
							  
							  