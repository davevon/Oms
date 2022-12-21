<?php  

// $db_host = "sql.freedb.tech";
// $db_user = "freedb_davevon";
// $db_pssword = "Wrjd7&2X2B3Aqg8";
// $db_name = "freedb_oms_database";


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "oms_database";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>

?>