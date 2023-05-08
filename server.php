<?php
$string = file_get_contents("dischi.json");
$dischi_array = json_decode($string);


// Preparazione della risposta
$response = [
    "results" => $dischi_array,
];

header('Content-Type: application/json');
echo json_encode($response);