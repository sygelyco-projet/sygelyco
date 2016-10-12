$(document).ready( function () {

  $("#register_matiere").validate({
            rules: {
                mt_name1: {
                    required: true,
                    minlength: 3
                },
                mt_name2: {
                    minlength: 3
                },
                abre_mt1: {
                    required: true,
                    minlength: 2
                },
                abre_mt2: {
                    minlength: 2
                }
            },
            messages: {                
                mt_name1: {
                    required: "Please enter a course name.",
                    minlength: "Your course name must consist of at least 3 characters long."
                },
                mt_name2: {
                    minlength: "Your course name must consist of at least 3 characters long."
                },
                abre_mt1: {
                    required: "Please enter abbreviation of the course.",
                    minlength: "Your abbreviation name must consist of at least 3 characters long."
                },
                abre_mt2: {
                    minlength: "Your abbreviation name must consist of at least 3 characters long."
                }
            },
            submitHandler: function(form) {
  $.ajax({
     type: "POST",
     url: "../controller/matiere.php",
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
    $('html, body').animate({scrollTop:0}, 'slow');
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
    $('html, body').animate({scrollTop:0}, 'slow');

    $("#mt_name1").val("");
    $("#mt_name2").val("");
    $("#abre_mt1").val("");
    $("#abre_mt2").val("");
    $("#des_cat1").val("");
    $("#des_cat2").val("");
    }
    
     }
  });
  return false;
    }
             
        });
 

 

 
});