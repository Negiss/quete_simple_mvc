<?php

// chargement de l'autoload en début de fichier

require __DIR__ . '/../vendor/autoload.php';
//...

$ItemController = new Controller\ItemController();
$ItemController->index();

?>