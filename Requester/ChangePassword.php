<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include('includes/header.php');
include('../dbConnection.php'); 
session_start();
if ($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='requesterLogin.php?'</script>";
}

$rEmail = $_SESSION['rEmail'];
if (isset($_REQUEST['passupdate'])){
if ($_REQUEST['rPassword'] == ""){
    $passmsg = '<div class="alet alert-warning col-sm-6 ml-5">  Fill All Fields</div>';
}
else{
    $rPass = $_REQUEST['rPassword'];
    $sql = "UPDATE requesterlogin_tb SEt r_password = '$rPass'
     where r_email = '$rEmail'";
     
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
            <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail; ?>" readonly>

        </div>

        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">

        </div>

        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update Password</button>
            <button type="reset" class="btn btn-secondary mt-4">Reset Password</button>
     <?php if(isset($passmsg)) {echo $passmsg;} ?>


    </form>


</div> <!-- Start User Change Password FROM 2nd Column -->

<?php
include('includes/footer.php');
?>