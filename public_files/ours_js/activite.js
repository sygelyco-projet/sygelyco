    // On déclare et initialise les variables utilisée
    var activite_detectee = false;
    var intervalle = 1000*5*60;
    // On crée la fonction qui teste toutes les x secondes l'activité du visiteur via activite_detectee
    function testerActivite() {
      // On teste la variable activite_detectee
         // Si une activité a été détectée [On réinitialise activite_detectee]
         if(activite_detectee)
           activite_detectee = false;
         // Si aucune activité n'a été détectée [on actualise le statut du visiteur]
         else{
			var lang = $_GET('lang'); //on recupere la langue qui est en cour
			if(lang==null) lang='fr';
			window.location='../controller/logout.php?lang='+lang;
		 }
      // On relance la fonction ce qui crée une boucle
      setTimeout('testerActivite();', intervalle);
    }
    // On lance la fonction testerActivite() pour la première fois, au chargement de la page
    setTimeout('testerActivite();', intervalle);

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