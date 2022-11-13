<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome css -->


    <link rel="stylesheet" href="../css/all.min.css">

    <!-- custome css -->

    <link rel="stylesheet" href="../css/custom.css">


    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


    <title>DashBoard</title>

<body>
    <!-- top nav bar -->
    <Nav class="navbar navbar-dark fixed-top bg-success
    flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3
     col-md-2 mr-0" href="dashboard.php"> OMS</a></Nav>

    <!-- Start container  -->
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <!-- start row  -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <!-- start Side bar  1st coolumn-->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link <?php if (PAGE == 'dashboard') {
                                                                    echo 'active';
                                                                } ?>" href="dashboard.php"><i class="fas
                           fa-user"></i>Dashboard</a></li>

                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-lnk" <?php if (PAGE == 'submitRequest.php') {
                                                                        echo 'active';
                                                                    } ?> href="submitRequest.php"><i class="fab
                           fa-accessible-icon"></i>Submit Request</a></li>


                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'ServiceSatus.php') {
                                                                                echo 'active';
                                                                            } ?> href="ServiceStatus.php"><i class="fas
                           fa-align center"></i>Service Status</a></li>

                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'ChangePassword.php') {
                                                                                    echo 'active';
                                                                                } ?> href="ChangePassword.php"><i class="fas
                           fa-key"></i>Change Password</a></li>

                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" href="../Logout.php"><i class="fas
                           fa-sign-out-alt"></i>Logout</a></li>

                                    </ul>
                </div>
            </nav><!-- End SIDE BAR 1st column  -->
            
        </div><!-- End row  -->
    </div> <!-- End Container  -->

    <!-- JavaScript -->
    <script src="../js/Jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

</body>

</html>