
$(document).ready(function() {
	var $classe = $('#classe_name');
	var $matiere = $('#matiere_name');
	
	
	// à la sélection d une classe dans la liste
	$classe.on('change', function() {
		//alert(id_annee);
		var val = $(this).val(); // on récupère la valeur de la classe
		$matiere.empty(); // on vide la liste des maiere
		//alert(val);
		if(val != '') {
			$.ajax({
				url: '../controller/note.php',
				data: 'classe='+ val, // on envoie $_GET['classe']
				dataType: 'json',
				success: function(json) {
					$.each(json, function(index, value) {
						$matiere.append('<option value="'+ index +'">'+ value +'</option>');
					});
				}
			});
		}
	});
	
	   $("#register_note").on('submit', function() {
	var lang = $_GET('lang'); //on recupere la langue qui est en cour
	if(lang==null) lang='fr';
	
     $.ajax({
     success: function(msg){
	 $("span#tableau").load("gestion_eleve/tableau_enregistrement_notes.php?lang="+lang+"&classe="+$('#classe_name').val()+"&matiere="+$('#matiere_name').val()+"&sequence="+$('#seq_name').val()+"&id_annee="+id_annee+"&id_user="+id_user);
     }
	 
  });
      return false;
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