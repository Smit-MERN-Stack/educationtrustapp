<?php 

if (isset($_POST['submit'])) {
    
    $to = $_POST['smitsuthar321@gmail.com']; 
    $subject = $_POST['smit'];
    $message = getRequestURI();
    $from = "smit.adept2@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>