<?php
$classe=new Classe();
$classe=$classe->allclasse();
$sequence=new Sequence();
$sequence=$sequence->allsequence();
?>

<div id="alert">
 </div>
<div class="row col-md-12 col-xs-6 col-sm-12 col-md-offset-0">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             enregistrement des notes
                          </header>
                          <div class="panel-body well">
                              <div class="form">
                                  <form class="form-validate form-vertical"  method="post" action="#" enctype="multipart/form-data">
                                      <div class="panel-body" style="border: 2px solid #d0bfbf; margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-1 ptext">Sequence<span class="required">* </span></label>
                                          <div class="col-lg-2">
                                              <select class=" form-control" id="seq_name" name="seq_name" required>
												<?php  foreach($sequence as  $seq)
												{
												  echo '<option value='.$seq["id"].'>'.$seq["nom_seq"].'</option>';
	    										  }?>
											  </select>
                                          </div>
										  <label for="full" class="control-label col-lg-1 ptext">Classe<span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <select class=" form-control" id="classe_name" name="classe_name" required>
											  <option></option>
												<?php  foreach($classe as  $cl)
												{
												  echo '<option value='.$cl["id"].'>'.$cl["nom_cl"].'</option>';
	    										  }?>
											  </select>
                                          </div>
										  <label for="full" class="control-label col-lg-1 ptext">Matiere<span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <select class="form-control" id="matiere_name" name="matiere_name" required>
												<option value="" > </option>
											  </select>
                                          </div>
                                      
									  <button class="btn btn-primary" type="submit" id="register_note" name="register_note">Aller à l'enregistrement</button>
                                      </div>
									  </div>
                                  </form>
                              </div>
                          </div>
						  
						  
						  <span id="tableau">
						</span><!-- span qui contiendra le tableau des notes -->
                      
					  
					  </section>
                  </div>
              </div>

<script src="../public_files/ours_js/note.js"></script>

