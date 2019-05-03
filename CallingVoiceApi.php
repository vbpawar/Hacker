<?php
$sender = $_REQUEST['sender'];
$reciever = $_REQUEST['reciever'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-voice.kaleyra.com/v1/?api_key=A293770fa76020d4b9371fdd669d804ec&method=dial.click2call&format=xml&caller='$sender'&receiver='$reciever'",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo  $err;
} else {
  echo $response;
}
?>
