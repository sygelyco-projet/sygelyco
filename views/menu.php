     <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
				</br>
				 <li <?php if(!isset($_GET['menu'])) {?>class="active" <?php } ?>>
                      <a class="" href="home.php?lang=<?php echo $_GET['lang']; ?>">
                          <i class="icon_house_alt"></i>
                          <span><?php echo menu1; ?></span>
                      </a>
                 </li>
				 <li class="sub-menu">
                      <a href="#" class="">
                          <i class="icon_document_alt"></i>
                          <span><?php echo module1_enregistrement; ?></span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_eleve"><?php echo enregistrement_eleve; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_personnel"><?php echo enregistrement_personnel; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_utilisaeur"><?php echo enregistrement_utilisaeur; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_cycle"><?php echo enregistrement_cycle; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_niveau"><?php echo enregistrement_niveau; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_classe"><?php echo enregistrement_classe; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_matiere"><?php echo enregistrement_matiere; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_sequence"><?php echo enregistrement_sequence; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_grade"><?php echo enregistrement_grade; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_statu"><?php echo enregistrement_statu; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_droit"><?php echo enregistrement_droit; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=enregistrement_sanction"><?php echo enregistrement_sanction; ?></a></li>
                      </ul>
                  </li>    
                             
                  <li class="sub-menu">
                      <a href="#" class="">
                          <i class="icon_table"></i>
                          <span><?php echo module2_enregistrement; ?></span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=planifications_matieres_personnel"><?php echo planifications_matieres_personnel; ?></a></li>
                          <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=planifications_enseignement"><?php echo planifications_enseignement; ?></a></li>
						  <li><a class="" href="home.php?lang=<?php echo $_GET['lang'];?>&menu=planifications_matieres_classe"><?php echo planifications_matieres_classe; ?></a></li>
                      </ul>
                  </li>   
                <!--  <li class="sub-menu">
                      <a href="#" class="">
                          <i class="icon_desktop"></i>
                          <span>Module2</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#">Sous module2</a></li>
                          <li><a class="" href="#">sous module2</a></li>
                          <li><a class="" href="#">sous module2</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="#">
                          <i class="icon_genius"></i>
                          <span>Module3</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="#">
                          <i class="icon_piechart"></i>
                          <span>Module4</span>
                          
                      </a>
                                         
                  </li>
                  
                  <li class="sub-menu">
                      <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Module6</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="#">sous Module6</a></li>
                          <li><a class="" href="#">sous Module6</a></li>
                      </ul>
                  </li> -->
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->