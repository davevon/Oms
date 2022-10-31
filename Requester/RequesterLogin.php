<?php

include('../dbConnection.php');
session_start();
if (!isset($_SESSION['is_login'])){
if(isset($_REQUEST['rEmail'])){
$rEmail = mysqli_real_escape_string($conn,trim( $_REQUEST['rEmail']));
$rPassword = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword']));
#checking to see if the password and email are correct and are in the database
#if it is in the database it means that it will be going to a next page if not we print an erro
$sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";

$result = $conn->query($sql);

if($result->num_rows == 1)
{
    $_SESSION['is_login'] = true;
        $_SESSION['rEmail'] = $rEmail;
   
echo "<script>location.href='RequesterProfile.php';</script>";
exit;
}
else{
    $msg= "<div class='alert alert-danger mt-2'>Error logging in with email and Password</div>";
}
}
}else{
    echo "<script>location.href='RequesterProfile.php';</script>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/all.min.css">
    <style>
        .custom-margin {
            margin-top: 8vh;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="mt-5 text-center mr-5 ml-5 mb-3" style="font-size:30px">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size: 20px;"><i class="fas fa-user-secret text-danger"></i>Requester Area (DEMO)</p>
    <div class="container-fluid">


        <div class="row justify-content-center custom-margin">

            <div class="col-sm-6 col-md-4">

                <form action="" class="shadow-lg p-5" method="POST">
                    <!-- Email input -->
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="rEmail" />
                        <small class="form-text">We'll never share your email with anyone else</small>

                    </div>
                    <!-- Password input -->
                    <div class="form-group">
                        <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label> <input type="password" class="form-control" placeholder="Password" name="rPassword" />

                    </div>
                    <!-- Submit button -->

                    <button type="submit" class="btn btn-outline-danger  shadow-sm btn-block mt-3 font-weight-bold">Login</button>
                <?php if(isset($msg)) {echo $msg;} ?>
                </form>
                <div class="text-center">
                    <a href="../index.php" class="btn btn-info mt-3 font weight-boold shadow-sm">Back to Home</a>
                </div>
            </div>
        </div>

    </div>



    </div>

    <!-- JavaScript Files -->
    <script src="../js/Jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>