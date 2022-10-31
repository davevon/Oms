    <?php  

    include ('dbConnection.php');
    if(isset($_REQUEST['rSignup'])){
        // checking for empty Fieelds
        if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") ||
        ($_REQUEST['rPassword'] == "")){
        // creating a regular messa to display a message wether the information is correct or not
        $regmsg = '<div class="alert alert-warning mt-2"
            role="alert">All Fields are required</div>';

        }
        else{
        // checking to see if Email is already registered
            $sql = "SELECT r_email FROM requesterlogin_tb where r_email ='".$_REQUEST['rEmail']."'";
            $result = $conn->query($sql);
        if($result->num_rows==1){
                $regmsg = '<div class="alert alert-warning mt-2"
            role="alert">Email ID already exists</div>';
   
        }else{


    $rName = $_REQUEST['rName'];
    $rEmail = $_REQUEST['rEmail'];
    $rPassword = $_REQUEST['rPassword'];
//passing the values into the database 
    $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES ('$rName','$rEmail','$rPassword')";

    if($conn->query($sql) == TRUE ) {
        $regmsg = '<div class="alert alert-success mt-2" 
        role="alert">Account Successflly Created</div>';
    }
    else {
    $regmsg = '<div class="alert alert-danger mt-2"
    role=="alert">Unable to create account</div>';
    }

    }
    }
}
    ?>

    <div class="container pt-5" id="registration">
        <h2 class="text-center"> Create an Account</h2>

        <div class="row mt-4 mb-4" center>

            <div class="col-md-6 offset-md-3">

                <form action="" class="shadow-lg p-4 " method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name </label>
                        <input class="form-control" type="text" placeholder="Name" name="rName" >
                    </div>


                    <div class="form-group">
                        <i class="fas fa-envelope"></i> <label for="email" class="font-weight-bold pl-2">Email </label>
                        <input class="form-control" type="email" placeholder="Email" name="rEmail">
                        <small class="form-text">We'll never share your email with anyone.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password </label>
                        <input class="form-control" type="password" placeholder="Password" name="rPassword" >
                    </div>
                    <button type="submit" class="btn btn-primary mt-d btn-block shadow-sm font-weight" name="rSignup" >
                        Sign Up</button>
                    <em style="font-size: 10px;" class="text-center">Note - By clocking Sign Up you agree to Our Terms Data Policy and Cookie Policy</em>

    <?php if(isset($regmsg)) {echo $regmsg; }?>

                </form>

            </div>
        </div>

    </div>
    <!-- end registration form Container-->