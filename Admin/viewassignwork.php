<?php
 session_start();
define('TITLE', 'Work Order');
define('PAGE', 'work');
include('includes/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php';</script>";
}

?>
<!-- start 2nd Column -->
<div class="col-sm-6 mx-3">
    <h3 class="text-center">Assigned work Details</h3>
    <?php
    if (isset($_REQUEST['View'])) {
        $sql = "SELECT * FROM assignwork_tb where request_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Request ID</td>
                <td>
                    <?php
                    if (isset($row['request_id'])) {
                        echo $row['request_id'];
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Request Info</td>
                <td>
                    <?php
                    if (isset($row['request_info'])) {
                        echo $row['request_info'];
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Description</td>
                <td>
                    <?php
                    if (isset($row['request_desc'])) {
                        echo $row['request_desc'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Requester Name</td>
                <td>
                    <?php
                    if (isset($row['requester_name'])) {
                        echo $row['requester_name'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Address 1</td>
                <td>
                    <?php
                    if (isset($row['requester_add1'])) {
                        echo $row['requester_add1'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Address 2</td>
                <td>
                    <?php
                    if (isset($row['requester_add2'])) {
                        echo $row['requester_add2'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <?php
                    if (isset($row['requester_city'])) {
                        echo $row['requester_city'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Zip Code</td>
                <td>
                    <?php
                    if (isset($row['requester_zip'])) {
                        echo $row['requester_zip'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <?php
                    if (isset($row['requester_email'])) {
                        echo $row['requester_email'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td>
                    <?php
                    if (isset($row['requester_mobile'])) {
                        echo $row['requester_mobile'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Assigneed date</td>
                <td>
                    <?php
                    if (isset($row['assign_date'])) {
                        echo $row['assign_date'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Technician</td>
                <td>
                    <?php
                    if (isset($row['assign_tech'])) {
                        echo $row['assign_tech'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Customer Sign</td>
                <td></td>
            </tr>
            <tr>
                <td>Technitian Sign</td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <div class="text-center">
        <form action="" class="mb-3 d-print-none d-inline">
            <input class="btn btn-danger" type="submit" value="Print" onclick="window.print()">
        </form>
        <form action="work.php" class="mb-3 d-print-none d-inline"><input class="btn btn-secondary" type="submit" value="Close">
        </form>
    </div>
</div>
<!-- end 2nd column -->

<?php include('includes/footer.php') ?>