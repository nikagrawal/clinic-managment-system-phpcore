<!-- small navbar -->
   
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                               
                                <li>
                                    <a href="index2.php">Go to frontend <i class="glyphicon glyphicon-share-alt"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["username"]; ?><i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Patient</a></li>
                                        <li><a href="#">Another action</a></li>
                                        
                                        <li role="presentation" class="divider"></li>
                                        <li><a href="index2.php">Logout</a></li>
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
                            <a class="navbar-brand" href="">CMS Patient Panel</a><img src="logo-ms.png" height="45" width="80">
                        </div>
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                
                                <li class="dropdown">
                                    <a href="appointment_patient_table_display.php" class="dropdown-toggle" data-hover="dropdown"><img src="appintment.png" height="30" width="30"> Appointment  <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="appointment_patient_table_display.php">Appointment</a></li>
                                        <li><a href=""></a></li>
                                    
                                    </ul>
                                </li>
                                 
                                <li class="dropdown">
                                    <a href="appointment_patient_table_display.php" class="dropdown-toggle" data-hover="dropdown"><img src="blood report.png" height="30" width="30">Report  <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
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