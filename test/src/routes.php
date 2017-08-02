<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hoge/{name}', function ($request, $response, $args) {
    $name = $args['name'];
    echo "Hello".$name;
});

$app->get('/con/json','\Slim\src\jsonController:index');
