<?php

$url = "http://myhand.org:8080/get.php?username=13284620027108&password=16813585211535&type=m3u_plus&output=ts";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

curl_close($ch);

header("Content-Disposition: attachment; filename=playlist.m3u");
header("Content-Type: application/octet-stream");

echo $data;

?>
