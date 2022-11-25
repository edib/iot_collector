<?php
$pdo = require 'connection.php';

function isValidJSON($str)
{
    json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
}

if (isset($_POST)) {
    $json_object = file_get_contents("php://input");
    if (strlen($json_object) > 0 && isValidJSON($json_object)) {
        $decoded_object = json_decode($json_object, true);
    }

    #print_r($decoded_object);

    foreach ($decoded_object["sensors"] as $value) {
        # print_r($value);
        $sql = "INSERT INTO sensors
        (location, key, value, device)
        VALUES(:location, :key, :value, :device);";

        $statement = $pdo->prepare($sql);

        $statement->execute([
            'location' => $value['location'],
            'key' => $value['key'],
            'value' => $value['value'],
            'device' => $value['device'],
        ]);
    }
}
