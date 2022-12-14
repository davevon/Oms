<?php
session_start();
define('TITLE', 'Requesters');
define('PAGE', 'Requesters');
include('../dbConnection.php');
include('includes/header.php');
if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php';</script>";
}
?>
<!-- start 2nd column -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-center text-white p-2"> List of Requesters</p>

    <?php
    $sql = "SELECT * FROM requesterlogin_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Requester ID</th>';
        echo '<th scope=" col">Name</th>';
        echo '<th scope=" col">Email</th>';
        echo '<th scope=" col">Status</th>';
        echo '<tr>';
        echo '</thead';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["r_login_id"] . '</td>';
            echo '<td>' . $row['r_name'] . '</td>';
            echo '<td>' . $row['r_email'] . '</td>';
            echo '<td>';
            echo '<form action="editreq.php" class="d-inline" method="POST" >';
            echo '<input type="hidden" name="id" value=' . $row["r_login_id"] . '><button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
            echo '</form>';
            echo '<form action="" class="d-inline" method="POST" >';
            echo '<input type="hidden" name="id" value=' . $row["r_login_id"] . '><button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="fas fa-trash"></i></button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';

        echo '</table>';
    } else {
        echo '0 Results';
    }
    ?>
</div>
<?php
if (isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM requesterlogin_tb where r_login_id = {$_REQUEST['id']}";
    if ($conn->query($sql) == true) {
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    } else {
        echo 'Unable to delete';
    }
} ?>


</div><!-- End row  -->
<div class="float-right"> <a href="insertreq.php" class="btn btn-success"><i class="fas fa-plus fa-2x"></i></a>
</div>


</div> <!-- End Container  -->

<!-- JavaScript -->
<script src="../js/Jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/all.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>