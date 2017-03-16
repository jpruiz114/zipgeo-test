<?php

require_once(__DIR__ . "/vendor/autoload.php");

use TheDMSGrp\ZipGeo\GeoNamesOrgParser;

try {
    $result = GeoNamesOrgParser::getGeoInfoByCityAndStateName('Clearwater', 'FL');
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}
