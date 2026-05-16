<?php
//get
$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listings/edit/{id}', 'ListingController@edit');
$router->get('/listings/{id}', 'ListingController@show');

//post
$router->post('/listings', 'ListingController@store');

//put
$router->put('/listings/{id}', 'ListingController@update');

//delete
$router->delete('/listings/{id}', 'ListingController@destroy');
