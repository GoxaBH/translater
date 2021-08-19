<?php

$request = new HttpRequest();
$request->setUrl('https://google-translate1.p.rapidapi.com/language/translate/v2');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders([
	'content-type' => 'application/x-www-form-urlencoded',
	'accept-encoding' => 'application/gzip',
	'x-rapidapi-key' => 'bb4818f758msh93b10c33927074ap171120jsn4023977ad1cb',
	'x-rapidapi-host' => 'google-translate1.p.rapidapi.com'
]);

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields([
	'q' => 'Hello, world!',
	'target' => 'es',
	'source' => 'en'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}
