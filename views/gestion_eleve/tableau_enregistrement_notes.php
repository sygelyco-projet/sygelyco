 <?php require '../../models/eleve.php'; 
 require '../../connexionBD/connexionBD.php';
 ?>

<div class="panel-body">
							  <div class="dataTable_wrapper">
							  
									<form class="form-validate form-vertical"  id="table_note" name="table_note" method="post" action="#" enctype="multipart/form-data">
									
									
									<table width=80% border="1" align="center" id="dataTables-example">
									
										<caption>Enregistrement des notes de la classe:<?php echo $_GET['classe'];?> .sequence:<?php echo $_GET['sequence'];?> .matière:<?php echo $_GET['matiere'];?> .</caption>
										<thead>
											<tr>
												<th>N°</th>
												<th>Matricule</th>
												<th>Nom et prénom</th>
												<th>Note</th>
											</tr>
										</thead>
										<tbody>
											
											<?php  
											$compteur= 1;
											$liste_eleves = new Eleve();
											$liste_eleves = $liste_eleves->getall_eleve_par_classe($_GET['classe'],$_GET['id_annee']);
											foreach($liste_eleves as  $el)
												{
												$eleve = new Eleve();
												$eleve->setId($el['id_eleve']);
												$eleve->setMatricule($el['matricule']);
												$eleve->setNom($el['nom_el']);
												$eleve->setPrenom($el['prenom_el']);
												?> 
												<tr class="odd gradeX" id="<?php echo $eleve->getId(); ?>" onMouseOver="trtab('<?php echo $eleve->getId(); ?>','#ddd');" onMouseOut="trtab('<?php echo $eleve->getId(); ?>','#fff');" >
												<?php
	    										  echo '<td>'.$compteur.'</td>';
												  echo '<td>'.$eleve->getMatricule().'</td>';
												  echo '<td>'.$eleve->getNom().' '.$eleve->getPrenom().'</td>';
												  ?><td width=80px>  
												  <input  onChange="verinotes()" maxlength=5  style="margin-top:0px" type="text" name="<?php echo $eleve->getId(); ?>" id="<?php echo $eleve->getId() ;?>" size="15" value="<?php echo $eleve->getnote($_GET['sequence'],$_GET['id_annee'],$_GET['matiere'],$_GET['id_user']); ?>"  />
												  </td></tr>
												  
												  <?php $compteur++;
												}
												if ($compteur==1) echo '<tr ><td colspan="4"> Aucun élève enregistré dans cette classe </td></tr>';
												?>
											
										</tbody>
									</table>
									</br>
									<center> <button class="btn btn-primary" type="submit" id="save_note" name="save_note">Enregistrer</button> </center>
									<span id="progressBar"></span> 
								   </form>
								</div>
 </div>
 
 <script >
 //var ProgressBar = require('ProgressBar.js');
  <?php //include("ProgressBar.js"); ?>
  function verinotes(id_text){

var test_dissable_button=1;
var maform = document.forms['table_note'];

for (var champ=0; champ < maform .elements.length; champ++) {
	if (maform.elements[champ].type.toLowerCase()=="text")
	{
		var elmt = maform .elements[champ].value;
		 var rep=0;
		 for(var i=0; i<=10 ; i=i+0.25){
			if (elmt==i || elmt=='/'){
			rep=1;
			break;
			}
		 }

		if(rep==1) {maform .elements[champ].style.backgroundColor='#ffffff'; }
		else {maform .elements[champ].style.backgroundColor='red'; test_dissable_button=0;}		
	}
	if (test_dissable_button==0) maform .elements['save_note'].disabled =true;
	else maform .elements['save_note'].disabled =false;
	//alert(maform .elements[champ].value)
}
 
 }
 
 function trtab(id,couleur){
 var elmt = document.getElementById(id);
 elmt.style.background = couleur;
 }
 
 $(document).ready(function() {	
	$("#table_note").on('submit', function() {
	var lang = $_GET('lang'); //on recupere la langue qui est en cour
	if(lang==null) lang='fr';
	var sequence = <?php echo $_GET['sequence'];?>;
	var classe = <?php echo $_GET['classe'];?>;
	var matiere = <?php echo $_GET['matiere'];?>;
	var id_annee = <?php echo $_GET["id_annee"]; ?>;
	var id_user =  <?php echo $_GET['id_user'] ; ?>;
	var AllInputs=document.forms['table_note'].getElementsByTagName('input');
	//alert(lang);
	/*var element = document.getElementById('container'); 
  
var line = new ProgressBar.Line(element, { 
  color: '#FCB03C', 
  trailColor: '#aaa' 
}); */
  
	//var bar = new ProgressBar.Line('#container', {easing: 'easeInOut'});
	var maform = document.forms['table_note'];
	var champ=0;
			 $.ajax({
			 success: function(msg){
				 
				for (champ=0; champ < maform .elements.length; champ++) {
					if (maform.elements[champ].type.toLowerCase()=="text")
					{
					var note= maform.elements[champ].value;		
					//alert();
					$("span#progressBar").load("../controller/enregistrement_notes.php?lang="+lang+"&classe="+classe+"&matiere="+matiere+"&sequence="+sequence+"&id_annee="+id_annee+"&id_user="+id_user+"&progress="+(champ+1)+"&note="+maform.elements[champ].value+"&id_eleve="+maform.elements[champ].id+"&nbrEleve="+AllInputs.length);
					}
					//line.animate((champ+1)/maform .elements.length); 
				}
				
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
 </script>