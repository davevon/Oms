<?php
session_start();
define('TITLE', 'Sell Product');
define('PAGE', 'Assets');
include('../dbConnection.php');
include('includes/header.php');

if (isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>
     location.href = 'login.php';
 </script>";
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Customer Bill</h3>
    <?php
    if (isset($_REQUEST['issue'])) {
        $sql = "SELECT * FROM assets_tb WHERE pid = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pid">Product Id</label>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php if (isset($row['pid'])) {
                                                                                    echo $row['pid'];
                                                                                } ?> " readonly>
        </div>

        <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" class="form-control" id="cname" name="cname" value="<?php if (isset($row['cname'])) {
                                                                                        echo $row['cname'];
                                                                                    } ?> ">
        </div>
        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="date" class="form-control" id="cadd" name="cadd" value="<?php if (isset($row['cadd'])) {
                                                                                        echo $row['cadd'];
                                                                                    } ?> ">

        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php if (isset($row['pname'])) {
                                                                                        echo $row['pname'];
                                                                                    } ?> ">
        </div>

        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" id="pava" name="pava" value="<?php if (isset($row['pava'])) {
                                                                                        echo $row['pava'];
                                                                                    } ?> " onkeypress="isInputNumber(event)">

        </div>

        <div class="form-group">
            <label for="pquantity">Quantity</label>
            <input type="text" class="form-control" id="pquantity" name="pquantity" value="<?php if (isset($row['pquantity'])) {
                                                                                                echo $row['pquantity'];
                                                                                            } ?> " onkeypress="isInputNumber(event)">

        </div>


        <div class="form-group">
            <label for="psellingcost">Price Each</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if (isset($row['psellingcost'])) {
                                                                                                        echo $row['psellingcost'];
                                                                                                    } ?> " onkeypress="isInputNumber(event)">

        </div>
        <div class="form-group">
            <label for="totalcost">Price Each</label>
            <input type="text" class="form-control" id="totalcost" name="totalcost" >

        </div>
        <div class="form-group">
            <label for="psellingcost">Date</label>
            <input type="date" class="form-control" id="inputDate" name="sellingdate" value="<?php if (isset($row['psellingcost'])) {
                                                                                                        echo $row['psellingcost'];
                                                                                                    } ?> " onkeypress="isInputNumber(event)">

        </div>

        <div class=" text-center">
            <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
            <a href="Assets.php" class="btn btn-secondary">Close</a>

        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>

    </form>
</div>

<!-- Only Number for Input Fields -->
<script>
    function isInputnumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9])/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>

<?php
include 'includes/footer.php';
?>