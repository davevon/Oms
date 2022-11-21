 <?php
    define('TITLE', 'Request');
    define('PAGE', 'Request');
    include('../dbConnection.php');
    include('includes/header.php');
    session_start();

    if (isset($_SESSION['is_adminlogin'])) {
        $aEmail = $_SESSION['aEmail'];
    } else {
        echo "<script>location.href='login.php';</script>";
    }
    ?>
 <!-- Start 2nd Column -->
 <div class="col-sm-2 mb-5">

     <?php
        $sql = "SELECT request_id, request_info, request_desc, 
     request_date From submitrequest_tb";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card mt-5 mx-10">';
                echo '<div class="card-header">';
                echo 'Request ID:' . $row['request_id'];
                echo '</div>';
                echo '<div class="card-body">';
                echo '<h6 class="card-title"> Request Info: ' . $row['request_info'];
                echo '</h6>';
                echo '<p class="card-text">' . $row['request_desc'];
                echo '</p>';
                echo '<p class="card-text">Req-Date: ' . $row['request_date'];
                echo '</p>';
                echo '<div class="float-right">';
                echo '<form action="" method="POST">';
                echo '<input type="hidden" name="id" value=' . $row["request_id"] . '>';
                echo '<input type="submit" class="btn btn-primary mr-3" value="View" name="View" >';
                echo '<input type="submit" class="btn btn-secondary" value="Close" name="Close">';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }

        ?>
 </div> <!-- END 2nd Column -->




 <?php 
 include ('assignworkform.php');
 include('includes/footer.php');
  ?>