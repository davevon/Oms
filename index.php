 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap Css -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- font awesome css -->

     <link rel="stylesheet" href="css/all.min.css">


     <!-- custome css -->

     <link rel="stylesheet" href="css/custom.css">


     <!-- google font -->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


     <title>OMS</title>
 </head>

 <body>

     <!-- start navigation -->
     <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
         <a href="index.php" class="navbar-brand">OMS</a>
         <span class="navbar-text">making our Customers statistified</span>
         <button type="button" class="navbar-toggler" data-toggle="collaspe" data-target="#myMenu"></button>

         <div class="" id="myMenu">

             <ul class="navbar-nav pl-5 custom-nav">
                 <li class="nav-item"><a href="index.php" class="nav-link"> Home</a></li>
                 <li class="nav-item"><a href="#Services.php" class="nav-link"> Service</a></li>
                 <li class="nav-item"><a href="Registration.php" class="nav-link"> Registration</a></li>
                 <li class="nav-item"><a href="requester/RequesterLogin.php" class="nav-link"> Login</a></li>
                 <li class="nav-item"><a href="#Contact.php" class="nav-link"> Contact</a></li>


             </ul>
         </div>

     </nav>

     <!-- end navigation -->


     <!-- start header JUMBOTRON -->
     <header class="jumbotron back-image" style="background-image:url(images/1.jpg)" ;>

         <div class="myclass mainHeading">
             <h1 class="text-uppercase text-primary font-weight-bolder">Welcome to OMS</h1>
             <p class="text-uppercase text-danger font-weight-bolder pclass">We give you exactly what you ask for</p>
             <a href="requester/RequesterLogin.php" class="btn btn-success" mr-4>Login</a>
             <a href="#registration" class="btn btn-primary" mr-4>signUp</a>

         </div>

     </header>
     <!-- start Introduction Section -->
     <div class="container">
         <div class="jumbotron">
             <h3 class="text-center">What we do</h3>
             <p class="text-center">
                 An IT service catalog is a directory of all the services that an IT team offers its end users, with relevant information such as the expected duration of service delivery, the associated operational costs , and approvals . Service catalog can be of two types.
             </p>
         </div>

     </div>

     <!-- end Introduction Section -->

     <!-- start services Section -->

     <div class="container tect-center border-bottom" id="Services">
         <h2 class="text-center">Our services</h2>
         <div class="row mt-4">

             <div class="col-sm-4 mb-4">
                 <a href="#"><i class="fas fa-laptop fa-8x text-success text"></i></a>
                 <h4 class="mt-4">Electronic Appliances</h4>
             </div>

             <div class="col-sm-4 mb-4">
                 <a href="#"><i class="fas fa-sliders-h fa-8x text-success"></i></a>
                 <h4 class="mt-4">Mentainance</h4>
             </div>

             <div class="col-sm-4 mb-4">
                 <a href="#"><i class="fas fa-cogs fa-8x text-success"></i></a>
                 <h4 class="mt-4">Repairs</h4>
             </div>


         </div>

     </div>

     <!-- end services Section  container-->

     <!-- Start registration form -->
     <?php include('userRegistration.php') ?>
     <!-- end registration form Container-->



     <!-- Start happy Customer -->
     <div class="jumbotron bg-success">

         <div class="container">
             <h2 class="text-center text-white">Testimonials</h2>

             <div class="row mt-5">
                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body">

                             <img src="images/avatar1.jpg" class="img-fluid" alt="avtl" style="border-radius:100px">
                             <h4 class="card-title">Davevon Craddock</h4>
                             <p class="card-text">I am very please with the service</p>
                         </div>

                     </div>

                 </div> <!-- end of first column -->

                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body">

                             <img src="images/avatar2.jpg" class="img-fluid" alt="avt2" style="border-radius:100px">
                             <h4 class="card-title">Shantel Green</h4>
                             <p class="card-text">I am very please with the service</p>
                         </div>

                     </div>

                 </div> <!-- end of second column -->

                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body">

                             <img src="images/avatar3.jpg" class="img-fluid" alt="avt3" style="border-radius:100px">
                             <h4 class="card-title">Bovin davis</h4>
                             <p class="card-text">I am very please with the service</p>
                         </div>

                     </div>

                 </div> <!-- end of third column -->
                 <div class="col-lg-3 col-sm-6">
                     <div class="card shadow-lg mb-2">
                         <div class="card-body">

                             <img src="images/avatar4.jpg" class="img-fluid" alt="avt4" style="border-radius:100px">
                             <h4 class="card-title">Julleyne Barrette</h4>
                             <p class="card-text">I am very please with the service</p>
                         </div>

                     </div>

                 </div> <!-- end of fourth column -->


             </div>
         </div>
     </div>

     <!-- End happy Customer -->

     <!-- start Contact US -->
     <div class="container " id="Contact">

         <h2 class="text-center mb-4">Contact Us</h2>
         <div class="row">

             <!-- sTart 1 colums  contact -->
             <?php include('contactFom.php') ?>
             <!-- end 1 column -->

             <div class="col-md-4 text-center">
                 <!-- start 2 column  contact-->

                 <strong>Headquater:</strong> <br>
                 OSM IT service, <br>
                 23 shalimar Avenue
                 Kingston - 12
                 Phone - +123456789
                 <a href="" target="_blank">www.facebook.com</a><br>
                 <br><br>

                 <strong>Branch:</strong> <br>
                 OSM IT service, <br>
                 23 shalimar New Kingston
                 Kingston - 12
                 Phone - +123456789
                 <a href="" target="_blank">www.facebook.com</a><br>
                 <br><br>

             </div> <!-- end 2 column -->
         </div>
     </div>
     </div> <!-- end of Cntact us -->


     <!-- start Footer -->
     <footer class="container-fluid bg-secondary bg-gradient mt-5 text-white">
         <div class="container">
             <div class="row py-3">
                 <div class="col-md-6">
                     <!-- Start 1 column -->
                     <span class="pr-2"> Follow Us: </span>
                     <a href="#" target="_blank" class="pr-2 fi-color"> <i class="fab fa-facebook-f"></i> </a>

                     <a href="#" target="_blank" class="pr-2 fi-color"> <i class="fab fa-twitter"></i> </a>
                     <a href="#" target="_blank" class="pr-2 fi-color"> <i class="fab fa-youtube"></i> </a>
                     <a href="#" target="_blank" class="pr-2 fi-color"> <i class="fab fa-google-plus-g"></i> </a>
                     <a href="#" target="_blank" class="pr-2 fi-color"> <i class="fab fa-tiktok"></i> </a>



                 </div> <!-- end of first column -->

                 <div class="col-md-6 text-right">
                     <!-- start of second column -->

                     <small>Designed By Davevon-Craddock &copy; 2022</small>
                     <small class="ml-2"><a href="../oms/admin/login.php">Admin Login</a></small>
                 </div>

             </div>

         </div>



     </footer>

     <!-- Javascript -->
     <script src="js/Jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/Jquery.min.js"></script>
     <script src="js/all.min.js"></script>


 </body>

 </html>