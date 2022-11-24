<?php
session_start();
define('TITLE', 'Requesters');
define('PAGE', 'Requesters');
include('../dbConnection.php');
include('includes/header.php');
if (isset($_SESSION ['is_adminlogin'])){
    $aEmail = $_SESSION ['aEmail'];

}
else{
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
    echo '<td>'.$row["r_login_id"].'</td>';
        echo '<td>' . $row['r_name'] . '</td>';
        echo '<td>' . $row['r_email'] . '</td>';

}
echo '</tbody>';

echo '</table>';

}
else {

}
?>
</div>
<!-- end second column -->
<?php include('includes/footer.php') ?>