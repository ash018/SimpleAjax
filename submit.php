<?php

function post($url, $data) {

$postvars = '';
foreach($data as $key=>$value) {
	$postvars .= $key . "=" . $value . "&";
}
	
$header = array("User-Agent: " . $_SERVER["HTTP_USER_AGENT"], "Content-Type: application/x-www-form-urlencoded");
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postvars);
$response = curl_exec($curl);
echo $response;
curl_close($curl);
return $response;
}

$url = "http://mis.digital:7779/YamahaRegistrationAPI/Dataprovider/ValidateUser/";

//$data = $_SERVER["QUERY_STRING"];

$userId = $_POST['userId'];
$password = $_POST['password'];

$data = [
	'userId' => $userId,
	'password' => $password
];

echo(post($url, $data));

?>