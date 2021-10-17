<?php

// MOSTRA OS ERROS
ini_set('display_errors', true);

// INICIA A SESSÃO
session_start();

// INLCUI A CLASSE ROUTER
use CoffeeCode\Router\Router;

// INCLUI O AUTOLOAD
require __DIR__ . "/../vendor/autoload.php";

// NOVO OBJ DO TIPO ROUTER
$router = new Router(URL);

// DEFINE O NAMESPACE BASE DOS CONTROLADORES
$router->namespace("Modules\Base\Controllers");

// TODAS AS ROTAS
require_once dirname(__DIR__)."/modules/Bootstrap/router_includes.php";

// EXECUTA AS ROTAS
$router->dispatch();

// REDIRECIONA TODOS ERROS
if ($router->error()) $router->redirect('error.error', ['errcode' => $router->error()]);
