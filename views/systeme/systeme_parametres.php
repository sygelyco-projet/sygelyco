
<div class="row col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
                  <div class="col-lg-12">
                      <section class="panel panel-info">
                          <header class="panel-heading">
                             <?php echo welcome_etablissement?>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="register_school" method="post" action="../controller/etablissement.php" enctype="multipart/form-data">
                                  <input type="hidden" name="lang" value="<?php echo $_GET['lang']?>"></input>
                                      <div class="form-group ">
                                          <label for="full" class="control-label col-lg-4 ptext"><?php echo nom_etablissement?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" id="school_name" name="school_name" value="<?php echo $etablissement->getNomE() ?>" type="text" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="username" class="control-label col-lg-4 ptext"><?php echo nom_proviseur?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="director_name" name="director_name" value="<?php echo $etablissement->getNomP() ?>" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-4 ptext"><?php echo boite_postale?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class=" form-control" value="<?php echo $etablissement->getBp() ?>" id="boite_p" name="boite_p" type="text" />
                                          </div>
                                      </div>
                                     
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-4 ptext"><?php echo tel_etablissement1?> <span class="required">*</span></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " value="<?php echo $etablissement->getTel() ?>" id="phone_number" name="phone_number" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-4 ptext"><?php echo email_etab?></label>
                                          <div class="col-lg-8">
                                              <input class="form-control " id="email" name="email" type="email" value="<?php echo $etablissement->getEmail() ?>"/>
                                          </div>
                                      </div>
                                        <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext demoInputBox">logo</label>
                                      <div class="col-lg-8">
                                      <input class="form-control" type="file" id="logo" name="logo">
                                      <span id="file_error_logo"></span>
                                      <p class="help-block">max width and height(100*30px) max size 100ko</p>
                                      </div>
                                  </div>
                                      <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext"><?php echo signature_proviseur?></label>
                                      <div class="col-lg-8">
                                      <input class="form-control" type="file" id="exampleInputFile" name="signature_p">
                                      <span id="file_error_exampleInputFile"></span>
                                      <p class="help-block">image scanner de sa signature (30*30px)</p>
                                      </div>
                                  </div>
                                      <h3 style="text-align: center; color: blue;"><?php echo slide_text?></h3>
                                      <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext"><?php echo image_?> 1</label>
                                      <div class="col-lg-8">
                                      <input class="form-control fileupload" type="file" id="exampleInputFile1" name="slide1">
                                      <span id="file_error_exampleInputFile1"></span>
                                      <p class="help-block">(930*380px) max size 200ko</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext "><?php echo image_?> 2</label>
                                      <div class="col-lg-8">
                                      <input class="form-control fileupload" type="file" id="exampleInputFile2" name="slide2">
                                      <span id="file_error_exampleInputFile2"></span>
                                      <p class="help-block">(930*380px) max size 200ko</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext"><?php echo image_?> 3</label>
                                      <div class="col-lg-8">
                                      <input class="form-control fileupload" type="file" id="exampleInputFile3" name="slide3">
                                      <span id="file_error_exampleInputFile3"></span>
                                      <p class="help-block">(930*380px) max size 200ko</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputFile" class="control-label col-lg-4 ptext"><?php echo image_?> 4</label>
                                      <div class="col-lg-8">
                                      <input class="form-control fileupload" type="file" id="exampleInputFile4" name="slide4">
                                      <span id="file_error_exampleInputFile4"></span>
                                      <p class="help-block">(930*380px) max size 200ko</p>
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


<script src="../public_files/ours_js/validate_form.js"></script>

