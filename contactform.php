<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $phoneNumber = $_POST['phone'];

    $mailTo = "contactme@mbalhakim.nl";

    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n Phone Number: ".$phoneNumber .".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers );
    header("Location: index.php?mailsend");


}
?>




