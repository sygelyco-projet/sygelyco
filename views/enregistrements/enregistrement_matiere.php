<div id="alert">
 </div>
<div class="row col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             <?php echo welcome_matiere?>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="register_matiere" method="post" action="#" enctype="multipart/form-data">
                                  <input type="hidden" name="lang" value="<?php echo $_GET['lang']?>"></input>
                                  <div class="panel-body" style="border: 2px solid #d0bfbf;margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_matiere?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="mt_name1" name="mt_name1" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo abre_matiere?><span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="abre_mt1" name="abre_mt1"/>
                                          </div>
                                      </div>
                                         <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo des_matiere?></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="des_mt1" name="des_mt1" type="text" />
                                          </div>
                                      </div>
                                       
                                      </div>
                                      <div class="panel-body" style="border: 2px solid #d0bfbf; margin-bottom: 5px;">
                                      	 <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_matiere?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="mt_name2" name="mt_name2" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo abre_matiere?><span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="abre_mt2" name="abre_mt2"/>
                                          </div>
                                      </div>
                                         <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo des_matiere?></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="des_mt2" name="des_mt2" type="text" />
                                          </div>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit"><?php echo _enregistrer?></button>
                                              <button class="btn btn-default" type="button"><?php echo _annuler?></button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

<script src="../public_files/ours_js/matiere.js"></script>

