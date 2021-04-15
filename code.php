<?php


include('firebase/dbcon.php');

if(isset($_POST['send_message']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $postData = [
        'Name' => $name,
        'Email' => $email,
        'subject' => $subject,
        'Message' => $message,
    ];
    $ref_table="contact";
$postRef = $database->getReference($ref_table)->push($postData);

}