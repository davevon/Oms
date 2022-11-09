<?php

define('TITLE', 'Requester Profile');
define('PAGE', 'Requester Profile');
include('includes/header.php');
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
if (isset($_REQUEST['nameupdate'])) {
    if ($_REQUEST['rName'] == "") {

        $passmessage = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="Alert">All fileds are required</div>';
    } else {
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin_tb SET r_name = r_email = '$rName' WHERE r_email = '$rEmail'";
        if ($conn->query($sql) == TRUE) {
            $passmessage = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Unable Successfully</div>';
        } else {
            $passmessage = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
    }
}

?>


<div class="col-sm-6 mt-5">  <!-- start Profile Area 2nd column -->
  
    <form action="" method="POST" class="mx-5">
        <div class="form-group">
            <label for="inputEmail">Email</label><input type="email"
             class="form-control" name="rEmaiil" id="rEmail" value="<?php echo
              $rEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="rNmae">Name</label><input type="text "
             class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
        </div>
        <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
        <?php if (isset($passmessage)) {
            echo $passmessage;
        } ?>
    </form>
</div><!-- End Profile Area 2nd Column  -->
<?php
include('includes/footer.php');
?>