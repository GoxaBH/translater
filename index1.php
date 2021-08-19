<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "q=Hello%2C%20world!&target=es&source=en",
	CURLOPT_HTTPHEADER => [
		"accept-encoding: application/gzip",
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: google-translate1.p.rapidapi.com",
		"x-rapidapi-key: bb4818f758msh93b10c33927074ap171120jsn4023977ad1cb"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
