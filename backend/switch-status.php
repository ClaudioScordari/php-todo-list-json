<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

var_dump($_POST['index']);

$jsonString = file_get_contents('todo.json', true);
$arrayDati = json_decode($jsonString, true);

// A quell'elemento dell'array, nella chiave completed, mettimi il valore opposto
$arrayDati[$_POST['index']]['completed'] = !$arrayDati[$_POST['index']]['completed'];

$finaljsonString = json_encode($arrayDati);
file_put_contents('todo.json', $finaljsonString);
