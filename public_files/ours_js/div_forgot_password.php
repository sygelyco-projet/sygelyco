<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php include("../../lang/decide-lang.php");?> 
	<form class="navbar-form" name="Mail_Form" id="Mail_Form" action="#" method="post">
		<center>Recuperation du mot de passe</center>
         <center><input  name="adresse" id="adresse" placeholder="adresse@gmail.com" type="text">
		 <input  name="code" id="code" placeholder="code de recuperation" type="text"></br>
		 <button class="btn btn-info btn-circle btn-xl" style="width: 40%" type="submit">envoyer le mail</button></center>
    </form>
</div>
<script>
$(document).ready( function () {
 $("#connexionForm").submit( function() {        
  $.ajax({
     type: "POST",
     url: "controller/login-verification.php",
     data: "login="+$("#login").val()+"&pass="+$("#pass").val(),
     success: function(msg){
	
	var lang = $_GET('lang'); //on recupere la langue qui est en cour
	if(lang==null) lang='fr';
	
    //alert(msg);
    if(msg==1) // si la connexion en php a fonctionnée
    {
    	//console.log(msg);
    window.location="views/home.php?lang="+lang;
    }
    else // si la connexion en php n'a pas fonctionnée
    {
	$("span#div_passe_oublie").html("");
     $("span#erreur").load("public_files/ours_js/div_erreur.php?lang="+lang);
     // on affiche un message d'erreur dans le span prévu à cet effet
    }
     }
  });
  return false;
 });
 
 
 
  $("#Mail_Form").submit( function() {        
  $.ajax({
     type: "POST",
     url: "controller/code-forgot-pass-verification.php",
     data: "adresse="+$("#adresse").val()+"&code="+$("#code").val(),
     success: function(msg){
	
	var lang = $_GET('lang'); //on recupere la langue qui est en cour
	if(lang==null) lang='fr';
	
    //alert(msg);
    if(msg==1) // si la connexion en php a fonctionnée
    {
    	//console.log(msg);
    window.location="views/home.php?lang="+lang;
    }
    else // si la connexion en php n'a pas fonctionnée
    {
	$("span#div_passe_oublie").html("<font color='red'>Code incorrecte code. contactez l'administrateur</font>");
    }
     }
  });
  return false;
 });
 
 
 
  $("#lang_index").on('change', function() {
  var lang = $(this).val(); // on récupère la lang
  var menu = $_GET('menu'); //on recupere le menu en cours
  $.ajax({
     url: "lang/decide-lang.php",
     data: "lang="+lang,
     success: function(msg){
	if(menu==null) window.location='index.php?lang='+lang;
    else window.location='index.php?lang='+lang+'&menu='+menu;
     }
  });
 });
 
   $("#label_passe_oublie").on('click', function() {
	var lang = $_GET('lang'); //on recupere la langue qui est en cour
	if(lang==null) lang='fr';
	
     $.ajax({
     success: function(msg){
	 $("span#erreur").html("");
	 $("span#div_passe_oublie").load("public_files/ours_js/div_forgot_password.php?lang="+lang);
     }
  });
 });

 
});

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}

</scrit>