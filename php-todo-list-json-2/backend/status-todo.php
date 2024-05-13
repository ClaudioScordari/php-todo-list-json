<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

var_dump($_POST['index']);

// Prendere contenuto di db (stringa)
$fileContent = file_get_contents('db.json');

// Decodifico per averlo in array associativo
$array = json_decode($fileContent, true);

$array[$_POST['index']]['completed'] = !$array[$_POST['index']]['completed'];

$stringJson = json_encode($array);
file_put_contents('db.json', $stringJson);