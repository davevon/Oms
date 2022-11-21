<?php
define('TITLE', 'Service Status');
define('PAGE', 'ServiceStatus');
include('includes/header.php');
include('includes/dbconnection');
?>
session_start();
if (isset($_SESSION['is_adminlogin'])) {
$aEmail = $_SESSION['aEmail'];
} else {
echo "<script>
    location.href = 'login.php';
</script>";
}
<?php
include('includes/footer.php');
?>