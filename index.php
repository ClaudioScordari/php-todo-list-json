<?php

// Recupero contenuto del mio file json
$jsonContent = file_get_contents('todo.json');

// Espongo il file json per la chiamata API
header('Content-Type: application/json');

echo json_encode($jsonContent);
