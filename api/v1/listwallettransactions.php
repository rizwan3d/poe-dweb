<?php


$config = include('config.php');



$transaction_id = 'f04221e2a082504adcd53d2788f23184840b2aa489f0c1e7b63825acfc5b9b2d';//$_POST['tx_id'];
$chain = $config['chain_name'];

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
 CURLOPT_POSTFIELDS => "{\"method\":\"getwallettransaction\",\"params\":[\"$transaction_id\"],\"id\":\"curltext\",\"chain_name\":\"$chain\"}",
 CURLOPT_HTTPHEADER => array(
  
   "cache-control: no-cache",
   "content-type: application/json"

 ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
}
