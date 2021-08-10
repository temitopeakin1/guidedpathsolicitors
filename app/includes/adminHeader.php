<header class="header-area">
        <div class="container">
            <div class="row">
                <div class="menu-area">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="logo shadow-lg p-3 mb-5 bg-white rounded">
                          <a href="<?php echo BASE_URL . '/articles.php'; ?>"><img src="../../assets/images/guided.png"></a>
                        </div>
                    </div>
                       <div class="col-md-9 hidden-xs hidden-sm">
                           <div class="main-menu">
                               <nav class="nav-menu">
                                   <?php if(isset($_SESSION['username'])): ?>
                                   <ul>
                                   <li>
                                       <a href="#">
                                           <i class="fas fa-user"></i>
                                           <!--display the user name thats ligging in to the session-->
                                            <?php echo $_SESSION['username']; ?>
                                            <i class="fas fa-chevron-down" style="font-size: .8em;" text-decoration="none;"></i>
                                       </a>
                                       <ul>
                                           <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                                        </ul>
                                    </li>
                                 </ul>
                             <?php endif; ?>
                              
                            </nav>
                        </div>
                       </div> 
                       <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                           <div class="mobile_menu"></div>
                       </div>
                     </div>
                </div>
             </div>
        </header>