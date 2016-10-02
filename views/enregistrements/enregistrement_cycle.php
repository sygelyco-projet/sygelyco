<div id="alert">
 </div>
<div class="row col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             <?php echo welcome_cycle?>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="register_cycle" method="post" action="#" enctype="multipart/form-data">
                                  <input type="hidden" name="lang" value="<?php echo $_GET['lang']?>"></input>
                                  <div class="panel-body" style="border: 2px solid #d0bfbf;margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_cycle?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="cycle_name1" name="cycle_name1" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo des_cycle?></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="des_cycle1" name="des_cycle1"/>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="panel-body" style="border: 2px solid #d0bfbf; margin-bottom: 5px;">
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_cycle?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="cycle_name2" name="cycle_name2" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo des_cycle?></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="des_cycle2" name="des_cycle2"/>
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

<script src="../public_files/ours_js/cycle.js"></script>

