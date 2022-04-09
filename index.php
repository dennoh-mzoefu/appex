<?php
header("Content-Type: application/json");

$stkCallbackResponse = file_get_contents('php://input');
// $logFile = "stkTinypesaResponse.json";
// $log = fopen($logFile, "a");
// fwrite($log, $stkCallbackResponse);
// fclose($log);

// $callbackContent = json_decode($stkCallbackResponse);

// $ResultCode = $callbackContent->Body->stkCallback->ResultCode;
// $CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
// $Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
// $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
// $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;
$ResultCode = 0;
if ($ResultCode == 0) {
    $servername = "sql206.unaux.com";
    $username = "unaux_31448661";
    $password = "kl3aiyxrtlo";
    $dbname = "unaux_31448661_trial";
    echo "hello";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $insert = $conn->query("UPDATE  users set CheckoutRequestID = '$CheckoutRequestID',MpesaReceiptNumber='$MpesaReceiptNumber' where phoneNumber ='$PhoneNumber'");
    $insert ="UPDATE  users set CheckoutRequestID = 'CheckoutRequestID',MpesaReceiptNumber='MpesaReceiptNumber' where phoneNumber ='0743386487'";
    mysqli_query($conn, $insert);
    // $conn = null;
}
