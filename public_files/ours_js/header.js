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
     $("span#erreur").load("div_erreur.php");
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