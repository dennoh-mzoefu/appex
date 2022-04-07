<?php
 		header("Content-Type: application/json");

     $response = '{
         "ResultCode": 0, 
         "ResultDesc": "Confirmation Received Successfully"
     }';
 
     // DATA
     $mpesaResponse = file_get_contents('php://input');
 
     // log the response
     $logFile = "M_PESAConfirmationResponse.txt";
 
     // write to file
     $log = fopen($logFile, "a");
 
     fwrite($log, $mpesaResponse);
     fclose($log);
 
     echo $response;
$db = mysqli_connect('sql206.unaux.com', 'unaux_31448661', 'kl3aiyxrtlo', 'unaux_31448661_trial');

$user_check_query ="UPDATE users set CheckoutRequestID = '$CheckoutRequestID',ResultCode = '$ResultCode',amount = '$Amount',MpesaReceiptNumber='$MpesaReceiptNumber',PhoneNumber='$PhoneNumber'  WHERE phoneNumber=$PhoneNumber";
$result = mysqli_query($db, $user_check_query);
}
