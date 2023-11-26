<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/getData', 'DatabasePPEController::getData');
$routes->post('/save', 'DatabasePPEController::save');
$routes->post('/del', 'DatabasePPEController::del');

$routes->post('/del', 'DatabasePPEController::send_request');

$routes->match(['post', 'get'],'/signin', 'SigninController::signin');
$routes->match(['post', 'get'],'/signup', 'SigninController::signup');

$routes->get('/getVerify', 'SigninController::getVerify');
$routes->post('/updateStatus', 'SigninController::updateStatus');