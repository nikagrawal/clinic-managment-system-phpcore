<!-- small navbar -->
   
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["username"]; ?><i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admin.php">Admin</a></li>
                                        <li><a href="#">Another action</a></li>
                                        
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
                            <a class="navbar-brand" href="dashboard.php">CMS Admin Panel</a><img src="logo-ms.png" height="45" width="80">
                        </div>
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="dashboard.php"> <img src="display.png" height="28" width="29"></a></li>
                                <li class="dropdown">
                                    <a href="admin.php" class="dropdown-toggle" data-hover="dropdown"><img src="admin.png" height="30" width="30">Admin <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="admin.php">Admin</a></li>
                                        <li><a href="admin_display.php">Admin Display</a></li>
                                    
                                    </ul>
                                </li>
                                 <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-hover="dropdown"> <img src="doctor.png" height="28" width="29"> Doctor <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="doctor.php">Doctor </a></li>
                                        <li><a href="doctor_display.php">Doctor Display</a></li>
                                        <li><a href="designation_table.php">Designation</a></li>
                                        <li><a href="designation_table_display.php">Designation Display</a></li>
                                       </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="patient.png" height="28" width="29"> Patient<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="patient.php">Patient</a></li>
                                        <li><a href="patient_display.php">Patient Display</a></li>
                                        <li><a href="blood_group.php">Blood Group</a></li>
                                        <li><a href="blood_group_display.php">Blood Group Display</a></li>
                                         <li><a href="prescription.php">Prescription</a></li>
                                        <li><a href="prescription_display.php">Prescription Display</a></li>
                                        <li><a href="appointment_table.php">Appointment</a></li>
                                        <li><a href="appointment_table_display.php">Appointment Display</a></li>
                                      </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="lab_details.php" class="dropdown-toggle" data-hover="dropdown"><img src="lab.png" height="30" width="30"> Lab<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="lab_details.php">Lab Details</a></li>
                                        <li><a href="lab_details_display.php">Lab Display</a></li>
                                       </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="disease.php" class="dropdown-toggle" data-hover="dropdown"><img src="dieases.png" height="30" width="30"> Disease<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="disease.php">Disease</a></li>
                                        <li><a href="disease_display.php">Dieases Display</a></li>
                                       </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="daycare.png" height="30" width="30"> Daycare<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="daycare.php">Daycare</a></li>
                                        <li><a href="daycare_display.php">Daycare Display</a></li>
                                        <li><a href="daycare_cost.php">Daycare Cost</a></li>
                                        <li><a href="daycare_cost_display.php">Daycare Cost Display</a></li>
                                       </ul>
                                </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="blood report.png" height="30" width="30"> Report<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                       
                                        <li><a href="sugar_report_display.php">Sugar Display</a></li>
                                       
                                        <li><a href="blood_report_display.php">Blood Report Display</a></li>
                                       
                                        <li><a href="urine_report_display.php">Urine Report Display</a></li>
                                         <li><a href="report_details.php"> Report Details</a></li>
                                        <li><a href="report_details_display.php"> Report Display</a></li>
                                         <li><a href="report_time.php"> Report time Details</a></li>
                                        <li><a href="report_time_display.php">Report time Display</a></li>
                                        </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"><img src="staff.png" height="26" width="26"> Staff<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header"> header</li>
                                        <li><a href="staff_table.php">STAFF</a></li>
                                        <li><a href="staff_table_display.php">STAFF Display</a></li>
                                      
                                       </ul>
                                </li>
                               
                                  </ul>

                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>