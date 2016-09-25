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
		$("#lang").on('change', function() {
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
