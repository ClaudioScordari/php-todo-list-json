<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

var_dump($_POST);

// Prendere contenuto di db (stringa)
$fileContent = file_get_contents('db.json');

// Decodifico per averlo in array associativo
$array = json_decode($fileContent, true);
// var_dump($array);

// Pushare $_POST nell'array db
$array[] = [
    'id' => count($array) + 1,
    'task' => $_POST['task'] ?? '',
    'completed' => $_POST['completed'] == 'false' ? false : true,
];
var_dump($array);

// Riscrivo il file json dando questo array
// prima dobbiamo riconvertirlo
$stringJson = json_encode($array);

// poi scriviamo
file_put_contents('db.json', $stringJson);