<?php


$config = include('config.php');
	$chain = $config['chain_name'];
	$signature = $_POST['signature'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => $config['rk_port'],
 CURLOPT_URL => $config['rk_host'],
 CURLOPT_USERPWD => $config['rk_user'].":".$config['rk_pass'],
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "{\"method\":\"liststreamkeyitems\",\"params\":[\"poe\",\"$signature\"],\"id\":\"curltext\",\"chain_name\":\"$chain\"}",
 CURLOPT_HTTPHEADER => array(
   
   "cache-control: no-cache",
   "content-type: text/plain",
   
 ),
));

$response = curl_exec($curl);
$err = curl_error($curl);curl_close($curl);if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
}
