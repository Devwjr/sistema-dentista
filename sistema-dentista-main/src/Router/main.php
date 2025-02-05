<?php

use App\Http\Routes;

Routes::get('/', 'HomeController@index'); 
Routes::get('/pacientes', 'PatientsController@list');
Routes::get('/login', 'UserController@loginPage'); 
Routes::get('/registrar', 'UserController@registerPage'); 
Routes::get('/logout', 'UserController@logout'); 


Routes::post('/registrar', 'UserController@registrar'); 
Routes::post('/login', 'UserController@login');


$method = $_SERVER['REQUEST_METHOD'];


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace('/sistema-dentista', '', $uri); 


Routes::dispatch($method, $uri);
