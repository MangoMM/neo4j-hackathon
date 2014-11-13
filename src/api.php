<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get(
    '/recommendation/product/{productId}',
    function ($productId) use ($app) {
        return sprintf('Find recommendations for product %s', $productId);
    }
);

$app->run();
