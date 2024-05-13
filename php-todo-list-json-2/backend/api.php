<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Devo leggere il contenuto del db json (stringa)
$jsonContent = file_get_contents('db.json', true);

// Lo mando al front end
header('Content-Type: application/json');
echo $jsonContent;

// // Decodifico (array associativo)
// $array = json_decode($jsonContent, true);
// var_dump($array);