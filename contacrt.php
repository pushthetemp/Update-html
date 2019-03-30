<?php

 if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "alex@pushthetempo.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an emailfrom".$firstName.".\n\n". $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contacrt.php?mailsend");
}
?>
