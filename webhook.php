<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // fetch RAW input
    $json = file_get_contents('php://input');

    // decode json
    $object = json_decode($json);

    file_put_contents('miregistro.log', print_r($object, true).PHP_EOL, FILE_APPEND);

	return "HTTP STATUS 200 (OK)";
}


?>
