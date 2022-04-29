<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Personnel Routes


$router->get('/personnel', 'PersonnelController@getPersonnelList');
$router->get('/{id}/personnel', 'PersonnelController@getPersonnelRequest');
$router->get('/personnel/{personnel}', 'PersonnelController@getPersonnel');
$router->post('/personnel', 'PersonnelController@addPersonnel');
$router->put('/personnel/{personnel}', 'PersonnelController@updatePersonnel');
$router->delete('/personnel/{personnel}', 'PersonnelController@deletePersonnel');
$router->get("/allPersonnel", "PersonnelController@getAllPersonnel");

$router->get('/personnelDetail/{personnel}', 'PersonnelController@getPersonnelDetails');
$router->post('/personnelDetails', 'PersonnelController@addPersonnelDetail');
$router->put('/personnelDetails/{id}', 'PersonnelController@updatePersonnelDetails');




//  // Hat Routes
  $router->get('/hats', 'HatController@getHats');
  $router->post('/hats', 'HatController@addHat');  


  $router->post('/hats/create', 'HatController@addCompleteHat');
  $router->post('/hats/setUpPc', 'HatController@setUpHatPC');
  $router->post('/hats/setUpLR', 'HatController@setUpHatLR');
  $router->post('/hats/setUpPersonnel', 'HatController@setUpPersonnel');
  $router->get('/hats/completeHat', 'HatController@completeHat');

  $router->put('/hats/update/{id}', 'HatController@updateCompleteHat');
  $router->get('/hats/{id}', 'HatController@getHat');
  $router->put('/hats/{id}', 'HatController@updateHat');
  $router->delete('/hats/personnelHats/{id}', 'HatController@deletePersonnelHats');
  //$router->get('/hats/getHatChart', 'HatController@getOrgChart');


//  $router->delete('/hats/{id}', 'HatController@deleteHat');
 
//  // Hat Level Routes
 
  $router->get('/hatlevels', 'HatLevelController@getHatLevels');
  $router->post('/hatlevels', 'HatLevelController@addHatLevel');
  $router->get('/hatlevels/{id}', 'HatLevelController@getHatLevel');
  $router->put('/hatlevels/{id}', 'HatLevelController@updateHatLevel');
  $router->delete('/hatlevels/{id}', 'HatLevelController@deleteHatLevel');
 
//  // Hat Rank Routes
 
  $router->get('/hatranks', 'HatRankController@getHatRanks');
  $router->post('/hatranks', 'HatRankController@addHatRank');
  $router->get('/hatranks/{id}', 'HatRankController@getHatRank');
  $router->put('/hatranks/{id}', 'HatRankController@updateHatRank');
  $router->delete('/hatranks/{id}', 'HatRankController@deleteHatRank');
 
 
//  // Hatting Chart
 
  $router->get('/hattingChart', 'HatController@hattingChart');
  $router->get('/hattingTable', 'HatController@hattingTable');
  $router->get('/getHatDetails/{id}', 'HatController@getHatDetails');
  $router->get('/getAllHats', 'HatController@getAllHats');