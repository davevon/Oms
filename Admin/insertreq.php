<?php
session_start();
define('TITLE', 'Update Requester');
define('PAGE', 'Requesters');
include('../dbConnection.php');
include('includes/header.php');
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php';</script>";
}
if (isset($_REQUEST['reqsubmit'])) {
    if (($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "")
        || ($_REQUEST['r_password'] == "")
    ) {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert" >Fill All Fields </div>';
    } else {
        $rname = $_REQUEST['r_name'];
        $remail = $_REQUEST['r_email'];
        $rpassword = $_REQUEST['r_password'];
        $sql = "INSERT INTO requesterlogin_tb (r_name, r_email,r_password  ) VALUES ('$rname','$remail','$rpassword')";
        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Added Successfully</div>';
        } else {
            '<div class="alert alert-danger col-sm-6 ml-5 mt -2" role="alert">Unable to Add</div>';
        }
    }
}
?>
<!-- Start 2nd column -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add new Requester</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="r_name">Name</label>
            <input type="text" class="form-control" id="r_name" name="r_name">
        </div>
        <div class="form-group">
            <label for="r_email">Email</label>
            <input type="email" class="form-control" id="r_email" name="r_email">

        </div>
        <div class="form-group">
            <label for="r_password">Password</label>
            <input type="password" class="form-control" id="r_password" name="r_password">

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="reqsubmit" name="reqsubmit">Submit</button>
            <a href="request.php" class="btn btn-secondary">Close</a>

        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>

    </form>
</div>
<!-- End Send column -->
<?php
include('includes/footer.php');

?>;