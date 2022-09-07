<?php
$errors = "";  
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name']; 
$emailFrom = $_POST['email']; 
$subject = $_POST['subject'];
$message = $_POST['message']; 
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $emailFrom)){
    $errors .= "\n Error: Invalid email address";
}
if(empty($errors)){
    $emailTo = "hanson@hansonzhliu.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    mail($emailTo, $subject, $txt, $headers);
    header('Location: https://hansonzhliu.com/confirmation');
}
?>
