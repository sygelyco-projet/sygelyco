$(document).ready( function () {

  $("#register_cycle").validate({
            rules: {
                cycle_name1: {
                    required: true,
                    minlength: 5
                },
                cycle_name2: {
                    minlength: 5
                }
            },
            messages: {                
                cycle_name1: {
                    required: "Please enter a cycle name.",
                    minlength: "Your cycle name must consist of at least 5 characters long."
                },
                cycle_name2: {
                    minlength: "Your cycle name must consist of at least 5 characters long."
                }
            },
            submitHandler: function(form) {
    /*var arr = [];
    var obj = {"nom_cy": $("#cycle_name1").val(), "description_cy": $("#des_cycle1").val()};
    arr.push(obj);  
    var obj1 = {"nom_cy": $("#cycle_name2").val(), "description_cy": $("#des_cycle2").val()}; 
    arr.push(obj1); */   
  $.ajax({
     type: "POST",
     url: "../controller/cycle.php",
     data: $(form).serialize(),
     success: function(data){
   var msg="";
  var lang = $_GET('lang'); //on recupere la langue qui est en cour
  if(lang==null) lang='fr';
  var res = $.parseJSON(data);
    //console.log(res.statut);
    if(res.statut=="exist") // si le cycle esxiste deja
    {
      if(lang=="fr")msg=res.mesg+" existe déja.";
     else if(lang=="en")msg=res.mesg+" already exist.";
     else msg=res.mesg+" ya existe.";
      
    var mydiv = document.createElement('div'); 
    mydiv.className = 'alert alert-danger alert-dismissable';
    mydiv.innerHTML="<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+msg+
    "</div>";
    document.getElementById("alert").appendChild(mydiv);
    }
    else // bien enregistrer;
    {
      if(lang=="fr")msg="bien enregistré.";
     else if(lang=="en")msg="well done.";
     else msg="así grabada.";

     var mydiv = document.createElement('div'); 
    mydiv.className = 'alert alert-info alert-dismissable';
    mydiv.innerHTML="<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+msg+
    "</div>";
    document.getElementById("alert").appendChild(mydiv);

    $("#cycle_name1").val("");
    $("#cycle_name2").val("");
    $("#des_cycle1").val("");
    $("#des_cycle2").val("");
    }
    
     }
  });
  return false;
    }
             
        });
 
  $("#lang_home").on('change', function() {
  var lang = $(this).val(); // on récupère la lang
  var menu = $_GET('menu'); //on recupere le menu en cours
  $.ajax({
     url: "../lang/decide-lang.php",
     data: "lang="+lang,
     success: function(msg){
	if(menu==null) window.location='../index.php?lang='+lang;
    else window.location='../index.php?lang='+lang+'&menu='+menu;
     }
  });
 });
 
 

 
});