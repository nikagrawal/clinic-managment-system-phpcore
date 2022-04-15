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
                                        <li><a href="admin.php">Staff</a></li>
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
                            <a class="navbar-brand" href="">CMS Staff  Panel</a><img src="logo-ms.png" height="45" width="80">
                        </div>
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href=""> </a></li>
                                <?php /* if($_SESSION["designation_id"]  == 17) 
                                { 
                                    ?>
                                <li class="dropdown">
                                    <a href="lab_details.php" class="dropdown-toggle" data-hover="dropdown"><img src="appintment.png" height="32" width="34"> Appointment<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="appointment_table.php">Appintment</a></li>
                                        <li><a href="appointment_table_display.php">Appintment display</a></li>
                                       </ul>
                                </li>
                                <?php
                            } */ ?>
                                



                            <?php /* if($_SESSION["designation_id"]  == 17) 
                                { 
                                    ?>
                                

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="patient.png" height="28" width="29">Patient<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="patient.php">Patient </a></li>
                                        <li><a href="patient_display.php">Patient Display</a></li>
                                       
                                        <li><a href="blood_group_display.php">Blood Group Display</a></li>
                                       
                                       
                                      </ul>
                            
                                    <?php
                                        } */ ?>
                               <?php if($_SESSION["designation_id"]  == 17) 
                                        { 
                                        ?>
                                

                                 </li>
                                <li class="dropdown">
                                    <a href="patient_display.php" class="dropdown-toggle" data-hover="dropdown"><img src="patient_display.png" height="30" width="30"> Patient Display<b class="caret"></b></a>
                                   <?php /*  <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> </li>
                                        <li><a href=""></a></li>                
                                       </ul>*/ ?>
                                </li>
                                        <?php
                                        } ?>

                                    <?php if($_SESSION["designation_id"]  == 17) 
                                        { 
                                        ?>
                                

                                </li>
                                <li class="dropdown">
                                    <a href="lab_details.php" class="dropdown-toggle" data-hover="dropdown"><img src="lab.png" height="30" width="30"> Lab<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="lab_details.php">Lab Details</a></li>
                                        <li><a href="lab_details_display.php">Lab Display</a></li>
                                       </ul>
                                </li>
                                        <?php
                                        } ?>
                               

                                    <?php if($_SESSION["designation_id"]  == 17) 
                                        { 
                                        ?>
                                



                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="daycare.png" height="26" width="26"> Daycare<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="daycare.php">Daycare</a></li>
                                        <li><a href="daycare_display.php">Daycare Display</a></li>
                                        <li><a href="daycare_cost.php">Daycare Cost</a></li>
                                        <li><a href="daycare_cost_display.php">Daycare Cost Display</a></li>
                                       </ul>
                                </li>

                                          <?php
                                        } ?>
                               

                                    <?php if($_SESSION["designation_id"]  == 17) 
                                        { 
                                        ?>
                                

                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="blood report.png" height="30" width="30">Report<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="sugar_report.php">Sugar Report</a></li>
                                        <li><a href="sugar_report_display.php">Sugar Display</a></li>
                                        <li><a href="blood_report.php">Blood Report</a></li>
                                        <li><a href="blood_report_display.php">Blood Report Display</a></li>
                                        <li><a href="urine_report.php">Urine Report Details</a></li>
                                        <li><a href="urine_report_display.php">Urine Report Display</a></li>
                                        </ul>
                                </li>
                                    <?php
                                        } ?>
                                         <?php if($_SESSION["designation_id"]  == 15) 
                                        { 
                                        ?>
                                

                                </li>
                                <li class="dropdown">
                                    <a href="patient.php" class="dropdown-toggle" data-hover="dropdown"><img src="patient.png" height="30" width="30"> New Patient<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="patient.php">New Patient</a></li>                
                                       </ul>
                                </li>
                                        <?php
                                        } ?>
                                         <?php if($_SESSION["designation_id"]  == 15) 
                                        { 
                                        ?>
                                

                                </li>
                                <li class="dropdown">
                                    <a href="appointment_table.php" class="dropdown-toggle" data-hover="dropdown"><img src="appintment.png" height="30" width="30"> Add appointment<b class="caret"></b></a>
                                   <?php /*  <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> </li>
                                        <li><a href=""></a></li>                
                                       </ul>*/ ?>
                                </li>
                                        <?php
                                        } ?>
                                          <?php if($_SESSION["designation_id"]  == 15) 
                                        { 
                                        ?>
                                

                                </li>
                                <li class="dropdown">
                                    <a href="vaccinereg.php" class="dropdown-toggle" data-hover="dropdown"><img src="vaccinereg.png" height="30" width="30">Vaccine Registration<b class="caret"></b></a>
                                   <?php /*  <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> </li>
                                        <li><a href=""></a></li>                
                                       </ul>*/ ?>
                                </li>
                                        <?php
                                        } ?>
                                         <?php if($_SESSION["designation_id"]  == 15) 
                                        { 
                                        ?>
                                

                                </li>
                                <li class="dropdown">
                                    <a href="patient_display.php" class="dropdown-toggle" data-hover="dropdown"><img src="patient_display.png" height="30" width="30"> Patient Display<b class="caret"></b></a>
                                   <?php /*  <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> </li>
                                        <li><a href=""></a></li>                
                                       </ul>*/ ?>
                                </li>
                                        <?php
                                        } ?>

                                  </ul>

                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>