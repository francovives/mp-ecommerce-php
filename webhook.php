<?php





/* $response = var_export($_POST, true);

// decode the json data into a php object

file_put_contents('registro.log',$response);
   */

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // fetch RAW input
    $json = file_get_contents('php://input');

    // decode json
    $object = json_encode($json);

    file_put_contents('registro.log', print_r($object, true));
  }
