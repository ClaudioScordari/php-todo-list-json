<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Devo scaricare i dati da un file json
$stringFileJson = file_get_contents('todo.json', true);

// Mandiamolo nella risposta con l'echo
echo $stringFileJson;
