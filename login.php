<?php
session_start();
if (isset($_SESSION['studentSession']) != "") 
{
    header("Location: student/index.php");
}else
{
    if (isset($_POST['login']))
    {
        $studentEmail = mysqli_real_escape_string($con,$_POST['email']);
        $password  = md5(mysqli_real_escape_string($con,$_POST['password']));
        $res = mysqli_query($con,"SELECT * FROM student WHERE studentEmail = '$studentEmail' LIMIT 1");
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
        if(mysqli_num_rows($res)==1)
        {
            // $date =$row['createdate'];
            if ($row['studentPassword'] == $password)
            {
                $_SESSION['studentSession'] = $row['studentEmail'];
                $user = "student";
                header("Location: student/");
             }
        }else 
        {
            $maintenance_id = mysqli_real_escape_string($con,$_POST['email']);
            $password  = md5(mysqli_real_escape_string($con,$_POST['password']));
            $res = mysqli_query($con,"SELECT * FROM maintenanceteam WHERE email = '$maintenance_id' AND password = '$password'");
            $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
            if (mysqli_num_rows($res)==1)
            {
                $_SESSION['maintenanceSession'] = $row['email'];
                $_SESSION['studentSession'] = NULL;
                $_SESSION['adminSession'] = NULL;
                $user = "maintenance";
                header("Location: maintenance/");
            }else 
            {
                $admin = mysqli_real_escape_string($con,$_POST['email']);
                $password  = md5(mysqli_real_escape_string($con,$_POST['password']));
                $res = mysqli_query($con,"SELECT * FROM admin WHERE email = '$admin' AND password = '$password'");
                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                if (mysqli_num_rows($res)==1)
                {
                    $_SESSION['adminSession'] = $row['email'];
                    $_SESSION['maintenanceSession'] = NULL;
                    $_SESSION['studentSession'] = NULL;
                    $user = "admin";
                    header("Location: admin/");       
                }
                else
                {
                    ?>
                    <script type="text/javascript">
                        alert('Invalid Email or Password!');
                    </script>
                    <?php
                }
            }
        }
    }
}
      
    ?>