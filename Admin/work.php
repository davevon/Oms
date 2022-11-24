<?php
session_start();
define('TITLE', 'Work Order');
define('PAGE', 'work');
include('../dbConnection.php');
include('includes/header.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php';</script>";
}
?>
<!-- Start 2nd column -->
<div class="col-sm-9 col-md-10 mt-5">
    <?php
    $sql = "SELECT * FROM assignwork_tb";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class= "table">';
        echo '<thread>';
        echo '<tr>';
        echo '<th scope = "col">Request Id</th>';
        echo '<th scope = "col">info</th>';
        echo '<th scope = "col">Name</th>';
        echo '<th scope = "col">address</th>';
        echo '<th scope = "col">City</th>';
        echo '<th scope = "col">Mobile</th>';
        echo '<th scope = "col">Technician</th>';
        echo '<th scope = "col">Assign Date</th>';
        echo '<th scope = "col">Action</th>';
        echo '<tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['request_id'] . '</td>';

            echo '<td>' . $row['request_info'] . '</td>';
            echo '<td>' . $row['requester_name'] . '</td>';
            echo '<td>' . $row['requester_add2'] . '</td>';
            echo '<td>' . $row['requester_city'] . '</td>';
            echo '<td>' . $row['requester_mobile'] . '</td>';
            echo '<td>' . $row['assign_tech'] . '</td>';
            echo '<td>' . $row['assign_date'] . '</td>';
            echo '<td>';
            echo '<form action="viewassignwork.php" method="POST" class="d-inline mr-2">';
            echo '<input type="hidden" name="id" value=' . $row['request_id'] . '><button type="submit" name="View" class ="btn btn-warning" value="View"><i class="fas
                           fa-eye center"></i></button>';
            echo '</form>';
            echo '<form action="" method="POST" class="d-inline mr-2">';
            echo '<input type="hidden" name="id" value=' . $row['request_id'] . '><button type="submit" name="delete" class ="btn btn-warning" value="Delete"><i class="fas
                           fa-trash center"></i></button>';
        
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        '</table>';
    } else {
        echo '0 Results';
    }
    if (isset($_REQUEST['delete'])) {
     $sql = "DELETE FROM assignwork_tb where request_id = {$_REQUEST['id']}";   
     if ($conn->query($sql) === true) {

        echo '<meta http-equiv="Content-Type" content="0;URL=? deleted"/>';
      }
      else {
        echo "Unable to delete Data";
      }
    }
    ?>
</div>
</div>

</div>
<!-- end 2nd column -->
<?php include('includes/footer.php') ?>