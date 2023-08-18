<?php

require 'vendor/autoload.php';

$jsonUrl = 'https://api_json_ejemplo';


$jsonData = file_get_contents($jsonUrl);

if ($jsonData === false) {
    die('Error al obtener el contenido JSON desde la URL.');
}

$date = date('Y-m-d');
$baseFilename = 'data-' . $date;

$jsonFilename = $baseFilename . '.json';
file_put_contents($jsonFilename, $jsonData);

$data = json_decode($jsonData, true);

if ($data === null) {
    die('Error al decodificar el JSON.');
}

$csvFilename = $baseFilename . '.csv';

$csv = \League\Csv\Writer::createFromPath($csvFilename, 'w+');
$csv->insertOne(array_keys($data[0]));

foreach ($data as $row) {
    $csv->insertOne($row);
}

echo 'Archivo JSON y CSV generados con éxito.';
?>
