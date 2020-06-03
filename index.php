<?php

require_once "vendor/autoload.php";

use DiegoMais\DigitalCep\Search;

$search = new Search;

$response = $search->getAddressFromZipCode('01001000');

print_r($response);