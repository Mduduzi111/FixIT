<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <?php                
                        if($_SESSION['receptionistSession']!=NULL){
                    ?>
                    <a class="navbar-brand" href="dashboard.php">Receptionist <?php echo $userRow['receptionistFirstName'];?> <?php echo $userRow['receptionistLastName'];?></a>
                <?php
                        }else if($_SESSION['doctorSession']!=NULL){
                ?>
                        <a class="navbar-brand" href="dashboard.php">Dr <?php echo $userRow['doctorFirstName'];?> <?php echo $userRow['doctorLastName'];?></a>
                <?php
                        }else if($_SESSION['adminSession']!=NULL){
                ?>
                        <a class="navbar-brand" href="dashboard.php">Admin <?php echo $userRow['adminFirstName'];?> <?php echo $userRow['adminLastName'];?></a>
                <?php
                        }
                ?>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                <?php                
                        if($_SESSION['receptionistSession']!=NULL){
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['receptionistFirstName']; ?> <?php echo $userRow['receptionistLastName']; ?><b class="caret"></b></a>
                <?php
                        }else if($_SESSION['doctorSession']!=NULL){
                ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['doctorFirstName']; ?> <?php echo $userRow['doctorLastName']; ?><b class="caret"></b></a>
                        <?php
                        }else if($_SESSION['adminSession']!=NULL){
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['adminFirstName']; ?> <?php echo $userRow['adminLastName']; ?><b class="caret"></b></a>                <?php
                        }
                ?>
                    
                    
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                           
                            <li class="divider"></li>
                            <li>
                                <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>