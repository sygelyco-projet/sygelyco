<?php
 require '../../models/classe.php';

 
 
 $classe=new Classe();
$classe=$cycle->allclasse();
?>

<div id="alert">
 </div>
<div class="row col-md-10 col-xs-5 col-sm-12 col-md-offset-1">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             enregistrement des notes
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-vertical" id="register_note" method="post" action="#" enctype="multipart/form-data">
                                      <div class="panel-body" style="border: 2px solid #d0bfbf; margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-1 ptext">Sequence<span class="required">* </span></label>
                                          <div class="col-lg-2">
                                              <select class=" form-control" id="seq_name" name="seq_name" >
												<option value=""> </option>
											  </select>
                                          </div>
										  <label for="full" class="control-label col-lg-1 ptext">Classe<span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <select class=" form-control" id="classe_name" name="classe_name" >
												<?php  foreach($classe as  $cl)
												{
												  echo '<option value='.$cl["id"].'>'.$cl["nom_cl"].'</option>';
	    										  }?>
											  </select>
                                          </div>
										  <label for="full" class="control-label col-lg-1 ptext">Matiere<span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <select class=" form-control" id="matiere_name" name="matiere_name" >
												<option value="" > </option>
											  </select>
                                          </div>
                                      
									  <button class="btn btn-primary" type="submit">Aller à l'enregistrement</button>
                                      </div>
									  </div>
                                  </form>
                              </div>
                          </div>
						  <div class="panel-body">
						  tableau
						  </div>
                      </section>
                  </div>
              </div>

<script src="../public_files/ours_js/note.js"></script>

