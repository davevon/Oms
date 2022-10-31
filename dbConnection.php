<?php  

$db_host = "localhost";
$db_user = "root";
$db_pssword = "";
$db_name = "oms_database";


//create database

$conn = new mysqli($db_host, $db_user, $db_pssword, $db_name);

// check if database exists

if($conn->connect_error)
{
    die("Error connection");

} else{
    echo "";
}

?>