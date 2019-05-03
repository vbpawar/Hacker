<?php
$sender = $_REQUEST['smsSender'];
$msg = $_REQUEST['msg'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-alerts.kaleyra.com/v4/?api_key=Ad17987bf8dcad571629ed52743034c51&method=sms&message=$msg&to=$sender&sender=BRANDS",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
} ?>
