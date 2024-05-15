<?php
require("./mailing/mailfunction.php");

// Check if form data is set before accessing it
if (isset($_POST["name"], $_POST["phone"], $_POST["email"], $_POST["message"])) {
    $name = $_POST["name"];
    $phone = $_POST['phone'];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = "<ul><li>Name: " . $name . "</li><li>Phone: " . $phone . "</li><li>Email: " . $email . "</li><li>Message: " . $message . "</li></ul>";


    try {
        $status = mailfunction("", "Company", $body); // Receiver
    
        if ($status) {
            echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
        } else {
            echo '<center><h1>Error sending message! Please try again.</h1></center>';
        }
    } catch (Exception $e) {
        echo '<center><h1>Error: ' . $e->getMessage() . '</h1></center>';
    }
    

} else {
    // Handle case where form data is not set
    echo '<center><h1>Error: Form data is missing.</h1></center>';
}
?>
