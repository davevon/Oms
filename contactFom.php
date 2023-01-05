<?php
// the contact form wont work with local host but will work on live servers

if (isset($_REQUEST['submit'])) {
    //checking for Empty Fields
    if (($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "")
        || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")
    ) {
        //msg displayed if required field missing
        $msg = '<div class="alert alert-warning col-sm-6-5 mt-2" role="alert">Fill out all fields.</div>';
    } else {
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $messsage = $_REQUEST['messsage'];
        $mailTo = "daviancraddock@gmail.com";
        $headers = "From: " . $email;
        $txt = "You have received an email From " . $name . ".\n\n" . $message;
        mail($mailTo, $subject, $txt, $headers);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Sent successfully. </div>';
    }
}

?>

<div class="col-md-8">
    <!-- sTart 1 colums  -->
    <form action="" method="POSt">
        <input type="text" class="form-control" name="name" placeholder="Name"><br>

        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
        <input type="Email" class="form-control" name="Email" placeholder="Email"><br>
        <textarea class="form-control" name="message" placeholder="how can we help you?" style="height:150px ;"></textarea><br>
        <input type="submit" class="btn btn-primary" value="send" name="submit"><br>

    </form>
</div> <!-- end 1 column -->