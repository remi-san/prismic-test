<?php

include_once __DIR__.'/vendor/autoload.php';

use Prismic\Api;
use Prismic\Predicates;

$langOptions = ['lang' => 'eu'];
$api = Api::get('https://evaneos.prismic.io/api', 'MC5XWnZuSUNnQUFGT3lUNjJt.77-977-9IyVs77-9AO-_ve-_vSHvv71HEe-_ve-_ve-_ve-_vUEO77-977-977-9IO-_ve-_ve-_vTR177-9Be-_ve-_vQ');

/** @var \Prismic\Document $doc */
//$doc = $api->query(Predicates::at('document.type', 'homepage'), $langOptions);
//$doc = $api->getSingle('homepage', $langOptions);
//$doc = $api->getByUID('homepage', 'homepage', $langOptions);
//$doc = $api->getByID('WZv8jigAAG6dUAyl');
//$doc = $api->getRef('Master');

$doc = $api
    ->forms()
    ->everything
    ->ref('WafIUSYAAMrts0HR')
    ->set('lang', '*')
    ->submit(); // see Api::query

dump($doc);
