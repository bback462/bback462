<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index..html.twig');
});

$app->get('/profile', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('profile.twig');
});

$app->get('/login', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('login.twig');
});

$app->get('/matches', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('matches.twig');
});

$app->get('/search', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('search.twig');
});

$app->get('/faq', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('faq.twig');
});

$app->run();






// DELETE COWSAY
//$app->get('/cowsay', function() use($app) {
//  $app['monolog']->addDebug('cowsay');
//  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
//});
