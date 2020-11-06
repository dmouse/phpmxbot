<?php

use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use BotMan\BotMan\BotMan;
use PhpMx\Router;

require 'vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__ . '/config'));
$loader->load('services.yaml');
$containerBuilder->compile(true);

$botman = $containerBuilder->get(BotMan::class);
$router = $containerBuilder->get(Router::class);
$router->mount();

$botman->listen();
