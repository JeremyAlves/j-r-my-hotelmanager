<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room
$router->get('/rooms/new/', 'RoomsController@new');     // Affiche le formulaire de création
$router->post('/rooms/new/', 'RoomsController@create'); // Traite le formulaire de création puis redirige
$router->get('/rooms/(\d+)/edit/', 'RoomsController@edit');     // Affiche le formulaire d'édition
$router->post('/rooms/(\d+)/edit/', 'RoomsController@update');  // Traite le formulaire d'édition puis redirige
$router->get('/rooms/(\d+)/delete/', 'RoomsController@delete'); // Action de supprimer un user

/**
 * Routes CLIENT
 */
$router->get('/clients', 'ClientsController@index');
$router->get('/clients/', 'ClientsController@show');
$router->get('/clients/new/', 'ClientsController@new');     // Affiche le formulaire de création
$router->post('/clients/new/', 'ClientsController@create'); // Traite le formulaire de création puis redirige
$router->get('/clients/(\d+)/edit/', 'ClientsController@edit');     // Affiche le formulaire d'édition
$router->post('/clients/(\d+)/edit/', 'ClientsController@update');  // Traite le formulaire d'édition puis redirige
$router->get('/clients/(\d+)/delete/', 'ClientsController@delete'); // Action de supprimer un user

$router->run();