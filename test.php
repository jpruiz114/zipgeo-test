<?php

require_once(__DIR__ . "/vendor/autoload.php");

use TheDMSGrp\ZipGeo\GeoNamesOrgParser;

try {
    $result = GeoNamesOrgParser::getGeoInfoByCityAndStateName('Clearwater', 'FL');
    print_r($result);

    $result = GeoNamesOrgParser::getGeoInfoByCityAndStateName('Clearwater', null);
    print_r($result);

    $result = GeoNamesOrgParser::getResultFromDB(['city' => 'CLEARWATER', 'state-code' => 'FL']);
    print_r($result);

    $result = GeoNamesOrgParser::getResultFromDB(['zipcode' => '33761']);
    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}
