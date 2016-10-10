<div id="alert">
 </div>
<div class="row col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             <?php echo welcome_classe?>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="register_classe" method="post" action="#" enctype="multipart/form-data">
                                  <input type="hidden" name="lang" value="<?php echo $_GET['lang']?>"></input>
                                  <div class="panel-body" style="border: 2px solid #d0bfbf;margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_classe?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="cl_name1" name="cl_name1" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo abre_classe?><span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="abre_cl1" name="abre_cl1"/>
                                          </div>
                                      </div>
                                         <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo des_classe?></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="des_cl1" name="des_cl1" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                      <label for="full" class="control-label col-lg-4 ptext"><?php echo cat_classe?> <span class="required">*</span></label>
                                      <div class="col-lg-8">
                                      <select class="form-control m-bot15" name="cat1">
                                      <?php  foreach($categories as  $cat)
                                        {
                                          echo '<option value='.$cat["id"].'>'.$cat["nom_cat"].'</option>';
                                          }?>
                                          </select>
                                          </div>
                                          </div>
                                       
                                      </div>
                                      <div class="panel-body" style="border: 2px solid #d0bfbf; margin-bottom: 5px;">
                                      	 <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_classe?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="cl_name2" name="cl_name2" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo abre_classe?><span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="abre_cl2" name="abre_cl2"/>
                                          </div>
                                      </div>
                                         <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo des_classe?></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="des_cl2" name="des_cl2" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                      <label for="full" class="control-label col-lg-4 ptext"><?php echo cat_classe?> <span class="required">*</span></label>
                                      <div class="col-lg-8">
                                      <select class="form-control m-bot15" name="cat2">
                                      <?php  foreach($categories as  $cat)
                                        {
                                          echo '<option value='.$cat["id"].'>'.$cat["nom_cat"].'</option>';
                                          }?>
                                          </select>
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

<script src="../public_files/ours_js/classe.js"></script>

