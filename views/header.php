<link href="Public_files/css/myheadcss.css" rel="stylesheet">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>
             <span class="school_name">BIENVENUE AU LYCEE BILINGUE DE ..........</span>

            <div class="top-nav notification-row">            
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li>
                    <p><i class="fa fa-phone-square"></i>+0123 456 70 90</p>
                    </li>    
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                    <!--
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="Public_files/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-2">
                          Sign In
                        </button>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="Vues/login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="Vues/documentation.php"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="Vues/documentation.php"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>

            <!-- Button trigger modal -->

             
      </header>      
      <!--header end-->

      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Please fill form</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form class="form-inline" role="form">
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                      <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                      <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Remember me
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Sign in</button>
                                              </form>

                                          </div>

                                      </div>
                                  </div>
                              </div>