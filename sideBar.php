<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
     <?php   
        if($_SESSION['receptionistSession']){
        ?>
            <ul class="nav navbar-nav side-nav">
                <li >
                    <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Upcoming Appointments</a>
                </li>

                <li>
                    <a href="visitReport.php"><i class="fa fa-fw fa-book"></i> Visit Report</a>
                </li>
                <li>
                    <a href="addschedule.php"><i class="fa fa-fw fa-table"></i> Doctor Schedule</a>
                </li>
                <li>
                    <a href="patientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
                </li>
            </ul>
     <?php   
        }else if($_SESSION['doctorSession']){
        ?>   
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li> 
                        <a href="visitReport.php"><i class="fa fa-fw fa-book"></i> Visit Report</a>
                    </li>
                    <li>
                        <a href="patientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
                    </li>
                </ul>


        </div><?php   
        }else if($_SESSION['adminSession']){
        ?>  
            <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admindashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li> 
                        <a href="admindoctorlist.php"><i class="fa fa-fw fa-doctor"></i> Doctor List</a>
                    </li>
                     <li> 
                        <a href="adminpatientlist.php"><i class="fa fa-fw fa-person"></i> Patient List</a>
                    </li>
                    <li> 
                        <a href="adminreceptionistlist.php"><i class="fa fa-fw fa-computer"></i> Receptionist List</a>
                    </li>
                    
                </ul>


        </div><?php   
        }
        ?>  
        
        <!-- /.navbar-collapse -->
    </nav>
            <!-- navigation end -->




            