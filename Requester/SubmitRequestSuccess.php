<?php 
define('TITLE','Success Request');

include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];

}
else{
    echo "<script> location.href='RequesterLogin.php?'</script>";
}

$sql = "SELECT * FROM submitrequest_tb where request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    # code... displaying the information about the person who is requesting the service...

    echo "<div class='ml-5 mt-5 '>
    <table class='table table-striped'>
    <tbody>
    <tr>
    <th>Request Id</th>
    <td>".$row['request_id']. "</td>
    </tr>

      <tr>
    <th>Requester Name </th>
    <td>" .$row['requester_name'] . "</td>
    </tr>


         <tr>
    <th>Email ID</th>
    <td>" .$row['requester_email'] . "</td>
    </tr>

    
         <tr>
    <th>Reequest Info</th>
    <td>" .$row['request_info'] . "</td>
    </tr>

    
         <tr>
    <th>Description</th>
    <td>" .$row['request_desc'] . "</td>
    </tr>

    
    <tr>
    <td><form class='d-print-none'><input class='btn 
    btn-danger' type='submit' value='Print'
    onClick='window.print()'></form></th>
    </tr>
    </tbody>
    </table>  
    
    </div>
    ";

}
else{
    echo "FAILED";
}
include('includes/footer.php');
?>

