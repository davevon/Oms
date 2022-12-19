<?php
define ('TITLE', 'Submit Request');
define('PAGE', 'submitRequest');
        include('includes/header.php');
        include('../dbConnection.php');
        session_start();
        if ($_SESSION['is_login']) {
            $rEmail = $_SESSION['rEmail'];
        }   else {
            echo "<script>location.href='requesterLogin.php'</script>";
        }
        if (isset($_REQUEST['submitrequest'])) {
            //checking for empty fields
            if (($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc']  == "") ||
                ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") ||
                ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") ||
                ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterZip'] == "") ||
                ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "")  ||
                ($_REQUEST['requestdate'] == "")
            ) {

                $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>Fill All Fields</div>";
            } else {
                $rinfo  = $_REQUEST['requestinfo'];
        $rdesc  = $_REQUEST['requestdesc'];
        $rname  = $_REQUEST['requestername'];
        $radd1  = $_REQUEST['requesteradd1'];
        $radd2  = $_REQUEST['requesteradd2'];
        
             $rcity  = $_REQUEST['requestercity'];
      $rstate  = $_REQUEST['requesterstate'];
                 $rzip = $_REQUEST['requesterZip'];
             $remail  = $_REQUEST['requesteremail'];
                      $rmobile  = $_REQUEST['requestermobile'];
       
    
    
        $rdate  = $_REQUEST['requestdate'];

            $sql = "INSERT INTO submitrequest_tb (request_info,
            request_desc,requester_name,requester_add1,requester_add2,
            requester_city,requester_state,requester_zip,requester_email,
            requester_mobile,request_date)VALUES('$rinfo','$rdesc','$rname',
            '$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
            if ($conn->query($sql) == TRUE) {
                $genid = mysqli_insert_id($conn);
            $msg = "<div class='alert alert-success col-sm-6 ml-5 
            mt-2'>Request Subitted Successfully</div>";
                    $_SESSION['myid'] = $genid;
                    echo "<script> location.href ='submitRequestSuccess.php'</script>";
                        }  else {
            # code...
            $msg = "<div class='alert alert-Danger col-sm-6 ml-5 mt-2'>Unable to Subitted your request</div>";
    
            }
        }
    }
?>

<div class="col-sm-9 col-md-10 mt-5">   <!-- Start service requesrt form 2nd column -->
   
    <form class="mx-5" action="" method="POSt">
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">

        </div>

        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">

        </div>


        <div class="form-group">
            <label for="inputRequestName">Name</label>
            <input type="text" class="form-control" id="inputRequestName" placeholder="Write Name" name="requestername">

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">

            </div>
            <div class="form-group col-md-6">
                <label for="inputAddres1">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Other Address" name="requesteradd2">

            </div>

        </div>

        <div class="form-row">
            <div class="form-group" col-md-6>


                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="requestercity">

            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" name="requesterstate">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="requesterZip" onkeypress="isInputNumber(event)">
         </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="requesteremail">
            </div>
            <div class="form-group col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputnumber(event)">
            </div>
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requestdate">
            </div>
        </div>
        <button type="submit" class="btn btn-success" name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

    </form>
    <?php if(isset($msg)) {echo $msg;} ?>

</div> <!-- End Service request form 2nd column -->

<!-- only Number For Input Files -->
<script>
    function isInputnumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9])/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>

<?php 
include ('includes/footer.php');
?>