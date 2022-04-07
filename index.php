<?php
header("Content-Type: application/json");

$stkCallbackResponse = file_get_contents('php://input');
$logFile = "stkTinypesaResponse.json";
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$callbackContent = json_decode($stkCallbackResponse);

// API URL
$url = 'http://appextrading.unaux.com/appex/pages/mpesa/callbackurl.php';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'username' => 'codexworld',
    'password' => '123456'
);
$payload = json_encode(array("user" => $data));

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
echo "hey";

// $CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
// $Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
// $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
// $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

// if ($ResultCode == 0) {
//     $servername = "host";
//     $username = "host username";
//     $password = "host passwoRd";
//     $dbname = "database name";

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $insert = $conn->query("INSERT INTO tinypesa(CheckoutRequestID,ResultCode,amount,MpesaReceiptNumber,PhoneNumber) VALUES ('$CheckoutRequestID','$ResultCode','$Amount','$MpesaReceiptNumber','$PhoneNumber')");

//     $conn = null;
// }
