<?php
header("Content-Type: application/json");

$stkCallbackResponse = file_get_contents('php://input');

$callbackContent = json_decode($stkCallbackResponse);

$ResultCode = $callbackContent->Body->stkCallback->ResultCode;
$CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
$Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

if ($ResultCode == 0) {
    $servername = "sql206.unaux.com";
    $username = "unaux_31448661";
    $password = "kl3aiyxrtlo";
    $dbname = "unaux_31448661_trial";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insert = $conn->query("UPDATE  users set CheckoutRequestID = '28398273',MpesaReceiptNumber='23298080' where phoneNumber ='0743386487'");

    $conn = null;
}
