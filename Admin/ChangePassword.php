 <?php
     session_start();
      define('TITLE', 'Change Password');
    define('PAGE', 'ChangePassword');
    include('includes/header.php');
    include('../dbConnection.php');
  
    if ($_SESSION['is_adminlogin']) {
        $rEmail = $_SESSION['aEmail'];
    } else {
        echo "<script> location.href='login.php?'</script>";
    }

    $rEmail = $_SESSION['aEmail'];
    if (isset($_REQUEST['passupdate'])) {
        if ($_REQUEST['aPassword'] == "") {
            $passmsg = '<div class="alet alert-warning col-sm-6 ml-5">  Fill All Fields</div>';
        } else {
            $rPass = $_REQUEST['aPassword'];
            $sql = "UPDATE adminlogin_tb SEt a_password = '$rPass'
     where a_email = '$rEmail'";

            if ($conn->query($sql) == TRUE) {
                $passmsg = '<div class="alert alert-Success col-sm-6 ml-5 mt-2">Update Successfully</div>';
            } else {
                $passmsg = '<div class="alert alert-Danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
            }
        }
    }

    ?>
 <div class="col-sm-9 col-md-10">
     <!-- Start User Change Password FROM 2nd Column -->
     <form class="mt-5 mx-5 " action="" method="POST">
         <div class="form-group">
             <label for="inputEmail">Email</label>
             <input type="email" class="form-control" id="inputEmail" name="aEmail "value="<?php echo $rEmail; ?>" readonly>

         </div>

         <div class="form-group">
             <label for="inputnewpassword">New Password</label>
             <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="aPassword">

         </div>

         <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update Password</button>
         <button type="reset" class="btn btn-secondary mt-4">Reset Password</button>
         <?php if (isset($passmsg)) {
                echo $passmsg;
            } ?>


     </form>


 </div> <!-- Start User Change Password FROM 2nd Column -->

 <?php
    include('includes/footer.php');
    ?>