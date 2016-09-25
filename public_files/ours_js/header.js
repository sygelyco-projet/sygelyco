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
    window.location="views/home.php?lang="+lang;
    }
    else // si la connexion en php n'a pas fonctionnée
    {
     $("span#erreur").load("public_files/ours_js/div_erreur.php?lang="+lang);
     // on affiche un message d'erreur dans le span prévu à cet effet
    }
     }
  });
  return false;
 });
  $("#lang_index").on('change', function() {
  var lang = $(this).val(); // on récupère la lang
  $.ajax({
     url: "lang/decide-lang.php",
     data: "lang="+lang,
     success: function(msg){
    window.location='index.php?lang='+lang;
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