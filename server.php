<?php
$string = file_get_contents("dischi.json");
$dischi_array = json_decode($string, true);


// Preparazione della risposta
$response = [
    "results" => $dischi_array,
    ];
// Invio della risposta
header('Content-Type: application/json');
echo json_encode($response);