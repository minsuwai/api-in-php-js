<?php 

$url = "http://localhost/api/api/save.php?name=john&age=24";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// POST RESQUEST
curl_setopt($ch, CURLOPT_HEADER, true);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=mary&age=30');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/plain'));

$data = curl_exec($ch);

echo "<pre>";
echo $data;