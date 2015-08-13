<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes here
    $app->get("/", function() use ($app) {
        return $app['twig']->render('scrabble_score.html.twig');
    });

    return $app;
?>