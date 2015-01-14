<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Provider\FormServiceProvider;

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/views'
));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' => 'checkers',
        'password' => 'root'
    )
));
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());

$app->get('/', function() use ($app){
    if(!isset($_SESSION['AUTHORIZATION'])) {
        return 'Пройдите <a href="Authorization">авторизацию</a><br/><a href="Registration">Зарегистрироваться</a>';
    }
});

$app->get('/Authorization', function(Request $request) use ($app){
    $data = array(
        'name' => 'Your name',
        'password' => 'Your password'
    );

    $form = $app['form.factory']->createBuilder('form', $data)
        ->add('name')
        ->add('password')
        ->getForm();

    $form->handleRequest($request);

    return $app['twig']->render('authorization.html.twig', array('form' => $form->createView()));
});

$app->post('/login', function() use ($app){
    $login = new Controllers\UserController();
    $login->Authorization($app['db']);
    return '';
});
//print_r($app['db']);

$app->get('/Registration', function() use ($app){
    return $app['twig']->render('registration.html.twig');
});

$app->get('/hello/{name}', function($name) use ($app){
    return $app['twig']->render('hello.html.twig', array(
        'name' => $name
    ));
});

$app->run();