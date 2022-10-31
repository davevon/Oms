<?php
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script>location.href='RequesterLogin.php'</script>";
}
$sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email = '$rEmail'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
}
if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName'] == ""){
 
 $passmessage ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="Alert">All fileds are required</div>';
    }
    else{$rName = $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin_tb SET r_name = r_email = '$rName' WHERE r_email = '$rEmail'";
        if($conn->query($sql) == TRUE)
        {
            $passmessage = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Unable Successfully</div>';
        }
        else{
            $passmessage = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- FONT Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">
    <title>Profile</title>

</head>

<body>
    <!-- top nav bar -->
    <Nav class="navbar navbar-dark fixed-top bg-success
    flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3
     col-md-2 mr-0" href="RequesterProfile.php"> OMS</a></Nav>

    <!-- Start container  -->
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <!-- start row  -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <!-- Side bar  1st coolumn-->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="RequesterProfile.php"><i class="fas
                           fa-user"></i>Profile</a></li>

                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-light" href="RequesterProfile.php"><i class="fab
                           fa-accessible-icon"></i>Submit Request</a></li>


                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-light" href="RequesterProfile.php"><i class="fas
                           fa-align center"></i>Service Status</a></li>

                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-light" href="RequesterProfile.php"><i class="fas
                           fa-key"></i>Change PAssword</a></li>

                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-light" href="RequesterProfile.php"><i class="fas
                           fa-sign-out-alt"></i>Logout</a></li>

                                    </ul>
                </div>
            </nav><!-- End SIDE BAR  -->
            <div class="col-sm-6 mt-5">
                <!-- start Profile Area 2nd column -->
                <form action="" method="POST" class="mx-5">
                    <div class="form-group">
                        <label for="inputEmail">Email</label><input type="email" class="form-control" name="rEmaiil" id="rEmail" value="<?php echo $rEmail ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rNmae">Name</label><input type="text" class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
                    </div>
                    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                <?php if(isset($passmessage)) {echo $passmessage;} ?>
                </form>
            </div><!-- End Profile Area 2nd Column  -->
        </div><!-- End row  -->
    </div> <!-- End Container  -->

    <!-- JavaScript -->
    <script src="../js/Jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>