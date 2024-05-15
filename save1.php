<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['experience']) && isset($_POST['details']) && isset($_FILES['fileToUpload'])) {
    $fname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $position = $_POST['status'];
    $experience = $_POST['experience'];
    $other = $_POST['details'];
    
    $uploadFile = $_FILES['fileToUpload']['name'];
    $uploadTempFile = $_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file($uploadTempFile, 'uploads/' . $uploadFile);

    $html = "<table>
                <tr><td>Name</td><td>$fname</td></tr>
                <tr><td>Mobile</td><td>$phone</td></tr>
                <tr><td>Email</td><td>$email</td></tr>
                <tr><td>Position</td><td>$position</td></tr>
                <tr><td>Experience</td><td>$experience</td></tr>
                <tr><td>Other Details</td><td>$other</td></tr>
                <tr><td>Resume</td><td><a href='uploads/$uploadFile' target='_blank'>$uploadFile</a></td></tr>
            </table>";

    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "alka58406@gmail.com";
    $mail->Password = "accknfxzqfywxzav";
    $mail->SetFrom($email);
    $mail->addAddress("kumarialk4555@gmail.com");
    $mail->IsHTML(true);
    $mail->Subject = "New Enquiry";
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    
    if($mail->send()){
         echo "Thankyou for connecting with us";
  }else{
      echo"Message Error";
  }

}
?>