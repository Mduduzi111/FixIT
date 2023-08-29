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
<?php
if (isset($_POST['signup'])) {

$studentName = mysqli_real_escape_string($con,$_POST['studentName']);
$studentSurname  = mysqli_real_escape_string($con,$_POST['studentSurname']);
$studentEmail     = mysqli_real_escape_string($con,$_POST['studentEmail']);
$studentEmail = trim($studentEmail);
$studentEmail = filter_var($studentEmail, FILTER_VALIDATE_EMAIL);
$studentNumber     = mysqli_real_escape_string($con,$_POST['studentNumber']);
$password         = MD5(mysqli_real_escape_string($con,$_POST['studentPassword']));
$resident         = mysqli_real_escape_string($con,$_POST['resident']);
$confirm_password = MD5(mysqli_real_escape_string($con,$_POST['verify']));
$studentPhone              = mysqli_real_escape_string($con,$_POST['studentPhone']);
if(strlen($studentNumber) == 9 && $studentNumber[0] == 2 ){
$gender = mysqli_real_escape_string($con,$_POST['studentGender']);
if($password==$confirm_password){ 
    $query = " INSERT INTO student (  studentName, studentSurname, studentEmail, studentNumber, resName , studentPassword,   studentPhone ,studentGender)
                            VALUES ( '$studentName', '$studentSurname', '$studentEmail', '$studentNumber', '$resident', '$password', '$studentPhone','$gender') ";
    $result = mysqli_query($con, $query);

    
   if($result )
   {
        
    ?>
    <script type="text/javascript">
        alert('Registration was successfully.');
        window.location= ("http://localhost/FixMed/index.php");
    </script>
    <?php


   }
}
else
{
?>
<script type="text/javascript">
alert("Passwords don't match!!");
</script>
<?php
}

}else{?>
    <script type="text/javascript">
alert("Invalid Student Number!!");
</script><?php
}
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic Appointment Application</title>

        
        <link href="assets/css/material.css" rel="stylesheet">
    </head>
    <body style="background: url(assets/img/image.jpg) no-repeat center center fixed; -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;" >
        

        <!-- modal container start -->
        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- modal content -->
                    <div class="modal-header">
                        <!-- <button  class="close" action="index.php" >x</button> -->
                        <h3 class="modal-title">Sign Up</h3>
                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">
                        
                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form" onsubmit="return validateForm()">
                                        <h4>Personal Details.</h4>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="studentName" value="" class="form-control input-lg" placeholder="First Name" required />
                                            </div>
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="studentSurname" value="" class="form-control input-lg" placeholder="Last Name" required />
                                            </div>
                                        </div>
                                        <input type="text" name="studentNumber" value="" class="form-control input-lg" placeholder="Your student Number"  required/>
                                        <input type="text" name="studentPhone" value="" class="form-control input-lg" placeholder="Your Phone number"  required/>         
                                        <input type="text" name="studentEmail" value="" class="form-control input-lg" placeholder="Your Email"  required/>
                                        
            
                                        <label>Gender : </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="studentGender" value="male" required/>Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="studentGender" value="female" required/>Female
                                        </label><br>
                                        Resident : <select name="resident" required>
													<option value="">Please select your Resident .........</option>
													<option value="Corridor Hill">Corridor Hill</option>
													<option value="Khayalethu">Khayalethu Student Res </option>
													<option value="Makoti">Makoti student Accmodatin</option>
                                                    
													<option value="Yeye">Yeye Student Accomodation</option>
																</select><br>   
                                        <input type="password" name="studentPassword" value="" class="form-control input-lg" placeholder="Password"  required/>
                                        
                                        <input id="verify" type="password" name="verify" value="" class="form-control input-lg" placeholder="Confirm Password"  required>
                                        <span id="verifyNote" style="color:red" class="warn hidden">Password Do Not Match!!</span></input>
                                       
                                        <br />
                                        <span class="help-block">By clicking Create my account, you agree to our Terms and Conditions Policy.</span>
                                        
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="signup" id="signup">Create my account</button>
                                       <br> <a style="text-align:right" href="index.php">Already have an account</a>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#verify').keyup(function(){
            if($(this).val()==$('#password').val()){
                $('#verifyNote').addClass('hidden');
            }else{
                $('#verifyNote').removeClass('hidden');
            }
        })
    })
</script>

</body>
</html>