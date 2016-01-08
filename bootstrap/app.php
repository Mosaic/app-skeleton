<?php

/**
 * Init application
 */
$app = new Fresco\Application(
    realpath(__DIR__ . '/../')
);

/**
 * Define components
 */
$app->definitions([
    Fresco\Definitions\DiactorosDefinition::class,
    Fresco\Definitions\LaravelConfigDefinition::class,
    Fresco\Definitions\FastRouteDefinition::class,
    Fresco\Definitions\TwigDefinition::class
]);

return $app;
