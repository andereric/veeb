<?php
require_once '../app/bootstrap.php';

$anna = new Client('Anna', 'Karutina', 39, 'silver');

echo '<pre>';
print_r($anna);
echo '</pre>';