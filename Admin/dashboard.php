<?php
session_start();
define('TITLE', 'DashBoard');
define('PAGE', 'dashboard');
include('../dbConnection.php');
include('includes/header.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php';</script>";
}
$sql = "SELECT count(request_id) FROM submitrequest_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();
$submitrequest = $row[0];

$sql = "SELECT count(rno) FROM assignwork_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();
$assignwork = $row[0];


$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
$total = $result->num_rows;




?>
<div class="col-sm-9 col-md-10">
    <!-- Start DashBBoard 2st column  -->


    <div class="row text-center mx-5">
        <div class="col-sm-4  mt-5">
            <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                <div class="card-header">Requests Received</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $submitrequest; ?></h4>
                    <a class="btn text-white" href="../admin/request.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4  mt-5">
            <div class="card text-white bg-info mb-3" style="max-width:18rem;">

                <div class="card-header">Assigned WorK</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $assignwork; ?></h4>
                    <a class="btn text-white" href="../admin/work.php">View</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4  mt-5">
            <div class="card text-white bg-primary mb-3" style="max-width:18rem;">

                <div class="card-header">No of Technician</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $total; ?></h4>
                    <a class="btn text-white" href="../admin/technician.php">View</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5 mt-5 tecx-center">
        <p class="bg-dark text-white p-2">List of Requesters</p>
        <?php
        $sql = "SELECT * FROM requesterlogin_tb";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="table">
            <thead>
            <tr>
                 <th scope ="col">Requester ID</th>
                 <th scope ="col">Name</th>
                 <th scope="col">Email</th>
                      </tr>
                      </thead>
                        <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["r_login_id"] . '</td>';

                echo '<td>' . $row["r_name"] . '</td>';

                echo '<td>' . $row["r_email"] . '</td>';

                echo '</tr>';
            }
            echo  '</tbody>
                      </table>';
        } else {
            echo '0 Results';
        }
        ?>
    </div>

</div><!-- End dahsboard Second column  -->

<?php include('includes/footer.php') ?>