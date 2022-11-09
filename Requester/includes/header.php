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
     <title><?php echo TITLE ?></title>

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
                 <!-- start Side bar  1st coolumn-->
                 <div class="sidebar-sticky">
                     <ul class="nav flex-column">
                         <li class="nav-item"><a class="nav-link <?php if (PAGE == 'RequesterProfile.php') {
                                                                        echo 'active';
                                                                    } ?>" href="RequesterProfile.php"><i class="fas
                           fa-user"></i>Profile</a></li>

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
                                         <li class="nav-item"><a class="nav-link" href="RequesterProfile.php"><i class="fas
                           fa-sign-out-alt"></i>Logout</a></li>

                                     </ul>
                 </div>
             </nav><!-- End SIDE BAR 1st column  -->