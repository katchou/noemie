<?php
require('../vendor/autoload.php');

$app = new \Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->get('/{name}/{clazz}', function(Silex\Application $app, $name, $clazz) {
  return $app['twig']->render('hello.twig', [
        'name' => $name,
        'class' => $clazz
    ]);
});

$app->run();
