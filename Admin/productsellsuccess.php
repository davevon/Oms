<?php
session_start();
define('TITLE', 'Success');
include('../dbConnection.php');
include('includes/header.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>
     location.href = 'login.php';
 </script>";
}

$sql = "SELECT * FROM customer_tb where custid = {$_session['myid']}";
$result = $db->query($sql);
if($result->num_rows == 1){
$row = $result->fetch_assoc();
echo "<div class = 'ml-5 mt-5'>
<table class='table'>
<tbody>
<tr>
<th> customer ID</th>
<td>".$row['custid']. "</td>
</tr>

<tr>
<th> customer Name</th>
<td>" . $row['custname'] . "</td>
</tr>

<tr>  
<th> Address</th>
<td>" . $row['custadd'] . "</td>
</tr>

<tr>
<th> Product</th>
<td>" . $row['cpname'] . "</td>
</tr>

<tr>
<th> Quantity</th>
<td>" . $row['cpquantity'] . "</td>
</tr>

<tr>
<th>Price Each</th>
<td>" . $row['cpeach'] . "</td>
</tr>

<tr>
<th>Total Cost</th>
<td>" . $row['cptotal'] . "</td>
</tr>

<tr>
<th>Date</th>
<td>" . $row['cpdate'] . "</td>
</tr>

<tr>
<td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form</td>
<td><a href='Assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
</tr>
</tbody>
</table>
</div>";
} else {echo "Faield";}

?>
<?php 
include('includes/footer.php');
?>