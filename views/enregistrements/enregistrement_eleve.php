              <div align="center" class="row">
                  <div style="width:70%" class="col-lg-12">
                      <!--collapse start-->
                      <div class="panel-group m-bot20" id="accordion">
                          <div class="panel panel-default">
						   <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              <div class="panel-heading">
                                  <h4 class="panel-title">                                     
                                          Etat Civil                                      
                                  </h4>
                              </div>
							  </a>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                   <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="#">
                                      
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="matricule" class="control-label col-lg-2">Matricule <span class="required">*</span></label>
                                          <div style="width:80%" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="matricule" name="matricule" type="text"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="nom" class="control-label col-lg-2">Nom <span class="required">*</span></label>
                                          <div style="width:80%" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="nom" name="nom" type="text"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="prenom" class="control-label col-lg-2">Prénom <span class="required">*</span></label>
                                          <div style="width:80%" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="prenom" name="prenom" type="text"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="sexe" class="control-label col-lg-2">Sexe <span class="required">*</span></label>
                                          <div style="width:80%" class="col-lg-10">
                                          <select style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" id="sexe" name="sexe" class="form-control m-bot15">
                                              <option>M</option>
                                              <option>F</option>
                                          </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:37%; text-align:left" for="date_nais" class="control-label col-lg-2">Date et lieux de naissance <span class="required">*</span></label>
                                          <div style="width:25%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="date_nais" name="date_nais" type="text"  required/>
                                          </div>
                                          <label style="width:9%; text-align:left" for="lieux_nais" class="control-label col-lg-2">à <span class="required">*</span></label>
                                          <div style="width:29%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="lieux_nais" name="lieux_nais" type="text"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="adresse" class="control-label col-lg-2">Adresse <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="adresse" name="adresse" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="photo" class="control-label col-lg-2">Photo <span class="required">*</span></label>
                                          <input style="width:80%;" class="col-lg-10" class="form-control " id="photo" name="photo" type="file" required/>
                                      </div>
                                  </form>
                              </div>
                          </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                          Filiation et infos. urgence                                      
                                  </h4>
                              </div>
							  </a>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                                                <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      
                                      
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="nationalite" class="control-label col-lg-2">Nationalité <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="nationalite" name="nationalite" type="text" required/>
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label style="width:30%; text-align:left" for="ecole_origine" class="control-label col-lg-2">Ecole d'origine <span class="required">*</span></label>
                                          <div style="width:25%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="ecole_origine" name="ecole_origine" type="text"  required/>
                                          </div>
                                          <label style="width:16%; text-align:left" for="type_ecole_origine" class="control-label col-lg-2">Type <span class="required">*</span></label>
                                          <div style="width:29%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class=" form-control" id="type_ecole_origine" name="type_ecole_origine" type="text"  required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="date" class="control-label col-lg-2">Date <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="date" name="date" type="date" required/>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="redoublant" class="control-label col-lg-2">Redoublant <span class="required">*</span></label>
                                          <div style="width:80%" class="col-lg-10">
                                          <select style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" id="redoublant" name="sexe" class="form-control m-bot15">
                                              <option>OUI</option>
                                              <option>NON</option>
                                          </select>
                                          </div>
                                      </div>
                                  </form>
                              </div>
								  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
						  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                          Parents
                                  </h4>
                              </div>
							  </a>
                              <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">
                                                                                                  <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      
                                      
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="nationalite" class="control-label col-lg-2">Nationalité <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="nationalite" name="nationalite" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="nom_tuteur_1" class="control-label col-lg-2">Nom du tuteur 1</label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="nom_tuteur_1" name="nom_tuteur_1" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="tel_tuteur_1" class="control-label col-lg-2">Tel du tuteur 1</label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="tel_tuteur_1" name="tel_tuteur_1" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="rel_tuteur_1" class="control-label col-lg-2">Relation du tuteur 1</label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="tel_tuteur_1" name="tel_tuteur_1" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="nom_tuteur_2" class="control-label col-lg-2">Nom du tuteur 2 <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="nom_tuteur_2" name="nom_tuteur_2" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="tel_tuteur_2" class="control-label col-lg-2">Tel du tuteur 2 <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="tel_tuteur_2" name="tel_tuteur_2" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label style="width:20%; text-align:left" for="rel_tuteur_2" class="control-label col-lg-2">Relation du tuteur 2 <span class="required">*</span></label>
                                          <div style="width:80%;" class="col-lg-10"><input style="background-color: rgba(54,66,74,1); color:#FFF; font-size:15px" class="form-control " id="rel_tuteur_2" name="rel_tuteur_2" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
								  </div>
                              </div>
                          </div>
                      </div>
                      <!--collapse end-->
                      
                  </div>
              </div>
              <!-- page end-->