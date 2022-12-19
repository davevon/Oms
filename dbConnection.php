<?php  

$db_host = "remotemysql.com";
$db_user = "xNmYtltLOu";
$db_pssword = "qifRBTxuqz";
$db_name = "xNmYtltLOu";


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