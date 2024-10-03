<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Src\Models\Database;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Database bağlantısını başlat
$db = new Database();
$conn = $db->getConnection();

// Slim uygulamasını başlat
$app = AppFactory::create();

// Basit bir GET endpoint oluştur
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, World!");
    return $response;
});

// Uygulamayı çalıştır
$app->run();
