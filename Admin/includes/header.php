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


    <title><?php echo TITLE ?></title>

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
                           fa-tachometer-alt"></i>Dashboard</a></li>

                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-lnk" <?php if (PAGE == 'work') {
                                                                        echo 'active';
                                                                    } ?> href="work.php"><i class="fab
                           fa-accessible-icon"></i>Work Order</a></li>


                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'Request') {
                                                                                echo 'active';
                                                                            } ?> href="Request.php"><i class="fas
                           fa-align center"></i>Requests</a></li>




                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'Assets') {
                                                                                    echo 'active';
                                                                                } ?> href="Assets.php"><i class="fas
                           fa-align center"></i>Assets</a></li>



                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'Technicians') {
                                                                                        echo 'active';
                                                                                    } ?> href="Technician.php"><i class="fas
                           fa-align center"></i>Technicians</a></li>




                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'Requesters') {
                                                                                            echo 'active';
                                                                                        } ?> href="Requester.php"><i class="fas
                           fa-align center"></i>Requesters</a></li>




                                            <ul class="nav flex-column">
                                                <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'SalesReport') {
                                                                                                echo 'active';
                                                                                            } ?> href="SoldProductReport.php"><i class="fas
                           fa-align center"></i>Sales Report</a></li>





                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a class="nav-link" <?php if (PAGE == 'WorkReport') {
                                                                                                    echo 'active';
                                                                                                } ?> href="WorkReport.php"><i class="fas
                           fa-person-digging"></i>Work Report</a></li>







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