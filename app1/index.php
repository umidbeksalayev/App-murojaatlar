<?php

echo "hello world<br>";


$response = file_get_contents('http://app2');

$data = json_decode($response);
var_dump($data);
?>
