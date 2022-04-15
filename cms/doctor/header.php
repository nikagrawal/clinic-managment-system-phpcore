 <!-- small navbar -->
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["username"]; ?> <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admin.php">Doctor</a></li>
                                        <li role="presentation" class="divider"></li>
                                         <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main / large navbar -->
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="">CMS Doctor Panel</a><img src="logo-ms.png" height="45" width="80">
                        </div>
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href=""> </a></li>
                                
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="appintment.png" height="32" width="34"> Today Appointment<b class="caret"></b></a>
                                     <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        
                                        <li><a href="appointment_today_display.php"> Today Appointment</a></li>
                                        <li><a href="appointment_today_cancel_display.php"> Today Cancel appointment</a></li>
                                         <li><a href="appointment_visited_display.php"> Today Visit appointment</a></li>
                                        
                                       </ul>
                                    
                                </li>
                                
                                
                              <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="appintment.png" height="32" width="34"> All Appointment<b class="caret"></b></a>
                                     <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        
                                        <li><a href="appointment_total_display.php"> Total Appintment display</a></li>
                                        <li><a href="appointment_visit_display.php"> Visit Appintment display</a></li>
                                        
                                       </ul>
                                </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="blood report.png" height="32" width="34"> Lab Report<b class="caret"></b></a>
                                     <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        
                                        <li><a href="lab_report_doctor.php"> Lab report</a></li>
                                        <li><a href="urine report_display.php">Urine report</a></li>
                                        <li><a href="blood_report_display.php">Blood report</a></li>
                                        <li><a href="sugar_report_display.php">Sugar report</a></li>
                                        
                                        
                                       </ul>
                                </li>
                                



                           
                                  </ul>

                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>