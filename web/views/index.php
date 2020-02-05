<?php
require_once("views/header.html");
<div class="jumbotron text-center">
  <div class="container">

<!--
    <a href="/" class="lang-logo">
      <img src="/lang-logo.png">
    </a>
-->
  <h1>Bear Link</h1>
  <p>HOME</p>



  </div>
</div>

<div class="jumbotron text-center" th:fragment="footer">
  <a type="button" class="btn btn-lg btn-primary" href="/"><span class="glyphicon glyphicon-home"></span> HOME</a>
  <a type="button" class="btn btn-lg btn-primary" href="/profile"><span class="glyphicon glyphicon-user"></span> PROFILE</a>
  <a type="button" class="btn btn-lg btn-primary" href="/matches"><span class="glyphicon glyphicon-heart"></span> MATCHES</a>
  <a type="button" class="btn btn-lg btn-primary" href="/search"><span class="glyphicon glyphicon-search"></span> SEARCH</a>
  <a type="button" class="btn btn-lg btn-primary" href="/faq"><span class="glyphicon glyphicon-list"></span> FAQ</a>

  <p>&copy; 2020 Bear Link</p>
</div>











?>
/*require('../vendor/autoload.php');

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
  return $app['twig']->render('index.twig');
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
