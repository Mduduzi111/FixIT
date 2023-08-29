<?php
include_once 'assets/conn/dbconnect.php';




include "login.php";
?>


<!-- script to verify new user details -->
<script>
function checkPasswordMatch(){
    var password1 = $("#password").val();
    var password2 = $("#confirm_password").val();;
    if(password1!=password2)
    {
       $("#message").html("**Passowrd do not match!");
    }
}
</script>

<!-- register -->
<!-- unable to add user to a database dont know whats wrong was working b4 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fixit Home Page</title>
     
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style1.css" rel="stylesheet">
        <link href="assets/css/blocks.css" rel="stylesheet">
        <link href="assets/css/material.css" rel="stylesheet">
    </head>
    <body style="background: url(assets/img/image.jpg) no-repeat center center fixed; -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;" >
        <!-- navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <a class="navbar-brand" href="student.php"><img alt="Brand" src="assets/img/fixitLogo.jpg" height="50px"></a> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        

                        <li><a href="signUp.php"  >Sign Up</a></li>
                    
                        <li>
                            <p class="navbar-text">Already have an account?</p>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <form class="form" role="form" method="POST" accept-charset="UTF-8" >
                                                <div class="form-group">
                                                    <label class="sr-only" for="email">Enter Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Sign in</button>
                                                    <br>
                                                </div>
                                                </form>
                                        
                                        
                                                    </div>
                                    </div>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#resetModal"> Forgot Password</a></li>
                            </ul>
                            
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- navigation -->

        
        <!-- modal container start -->
        <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- modal content -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">RESET PASSWORD</h3>
                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">
                        
                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form">
                                        <div class="row">

                                        </div>
                                        
                                        <input type="number" name="patient_id" value="" class="form-control input-lg" placeholder="Your ID Number"  required/>
                                        
                                        <button class="text-center btn btn-primary  signup-btn" type="submit" name="resetPassword" id="signup">Reset Password</button>
                                      </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        <!-- modal container end -->

        <!-- 1st section start -->
        <section id="promo-1" >
        <!-- class="content-block promo-1 min-height-600px bg-offwhite"> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        
                        <h3>LogIn</h3>
                       
                                            <form class="form" role="form" method="POST" accept-charset="UTF-8" >
                                                <div class="form-group">
                                                    <label class="sr-only" for="email">patient_id</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                            </form>
                                   
                    </div>

                      
                </div>
                <!-- /.row -->
            </div>
        </section>
           </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/date/bootstrap-datepicker.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/collapse.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
    })
    </script>
    <!-- date start -->
</body>
</html>