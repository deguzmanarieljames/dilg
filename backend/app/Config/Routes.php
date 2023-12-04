<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// DATABASE PPE
$routes->get('/getData', 'DatabasePPEController::getData');

$routes->post('/save', 'DatabasePPEController::save');
$routes->post('/del', 'DatabasePPEController::del');


// INVENTORY
$routes->get('/getInventory', 'DatabasePPEController::getInventory');
$routes->post('/saveInventory', 'DatabasePPEController::saveInventory');
$routes->post('/delInventory', 'DatabasePPEController::delInventory');

// SECURITY SIGNIN/SIGNUP
$routes->match(['post', 'get'],'/signin', 'SigninController::signin');
$routes->match(['post', 'get'],'/signup', 'SigninController::signup');

$routes->get('/getVerify', 'SigninController::getVerify');
$routes->post('/updateStatus', 'SigninController::updateStatus');


// EMPLOYEE

$routes->post('/send_request', 'RequestController::send_request');
$routes->get('/getReq', 'RequestController::getReq');

$routes->get('/getEmployee', 'DatabasePPEController::getEmployee');
$routes->get('/getEmployees', 'DatabasePPEController::getEmployees');