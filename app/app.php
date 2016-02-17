<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TwoPlayerRPS.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    	'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/comp', function() use ($app) {
        return $app['twig']->render('form_computer.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $result = new TwoPlayerRPS($_GET['player1'], $_GET['player2']);

        return $app['twig']->render('results.html.twig', array('results' => $result));
    });

    $app->get('/results_computer', function() use ($app) {
        $Game = new RockPaperScissors($_GET['player1']);
        return $app['twig']->render('results_computer.html.twig', array('game' => $Game));
    });

    return $app;
?>
