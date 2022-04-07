<?php
header("Content-Type: application/json");

$stkCallbackResponse = file_get_contents('php://input');
$logFile = "stkTinypesaResponse.json";
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$callbackContent = json_decode($stkCallbackResponse);

$ResultCode = $callbackContent->Body->stkCallback->ResultCode;
$CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
$Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

if ($ResultCode == 0) {
    
//     $servername = "host";
//     $username = "host username";
//     $password = "host passwoRd";
//     $dbname = "database name";
    
    
    $servername = "sql206.unaux.com";
    $username = "unaux_31448661";
    $password = "kl3aiyxrtlo";
    $dbname = "unaux_31448661_trial";

    // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
//     $db = mysqli_connect('sql206.unaux.com', 'unaux_31448661', 'kl3aiyxrtlo', 'unaux_31448661_trial');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//     $user_check_query ="UPDATE users set CheckoutRequestID = '$CheckoutRequestID',ResultCode = '$ResultCode',amount = '$Amount',MpesaReceiptNumber='$MpesaReceiptNumber',PhoneNumber='$PhoneNumber'  WHERE phoneNumber=$PhoneNumber";
//     $insert = $conn->query("UPDATE users set CheckoutRequestID = '$CheckoutRequestID',ResultCode = '$ResultCode',amount = '$Amount',MpesaReceiptNumber='$MpesaReceiptNumber',PhoneNumber='$PhoneNumber'  WHERE phoneNumber=$PhoneNumber");
// $result = mysqli_query($db, $user_check_query);
     $insert = $conn->query("INSERT INTO users(CheckoutRequestID,ResultCode,amount,MpesaReceiptNumber,PhoneNumber) VALUES ('$CheckoutRequestID','$ResultCode','$Amount','$MpesaReceiptNumber','$PhoneNumber')");

    $conn = null;
}
