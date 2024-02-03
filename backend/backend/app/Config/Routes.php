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

$routes->match(['get', 'post'], 'fetch_data/(:any)', 'DatabasePPEController::fetchData/$1');
$routes->match(['get', 'post'], '/getDataById/(:any)', 'DatabasePPEController::getDataById/$1');
$routes->match(['get', 'post'], 'update_date_returned/(:any)', 'DatabasePPEController::updateDateReturned/$1');



// INVENTORY
$routes->get('/getInventory', 'DatabasePPEController::getInventory');
$routes->post('/saveInventory', 'DatabasePPEController::saveInventory');
$routes->post('/delInventory', 'DatabasePPEController::delInventory');
$routes->get('/getReqAdmin', 'DatabasePPEController::getReq');
$routes->match(['post', 'get'], '/updateInventory', 'DatabasePPEController::updateInventory');

// SECURITY SIGNIN/SIGNUP
$routes->match(['post', 'get'],'/signin', 'SigninController::signin');
$routes->match(['post', 'get'],'/signup', 'SigninController::signup');

$routes->get('/getVerify', 'SigninController::getVerify');
$routes->match(['post', 'get'], '/updateStatus(:any)', 'SigninController::updateStatus/$1');

$routes->match(['post', 'get'], 'send-verification-email', 'SigninController::sendVerificationEmail');
$routes->match(['post', 'get'], 'verify-account', 'SigninController::verifyAccount');
$routes->match(['post', 'get'], 'updateVerificationStatus', 'SigninController::updateVerificationStatus');




// EMPLOYEE

$routes->post('/send_request', 'RequestController::send_request');
$routes->match(['get', 'post'], '/users/(:any)', 'RequestController::users/$1');
$routes->match(['get', 'post'], '/getReq', 'RequestController::getReq');
// $routes->get('/getUser', 'DatabasePPEController::getUser');

$routes->get('/getEmployee', 'DatabasePPEController::getEmployee');
$routes->get('/getEmployees', 'DatabasePPEController::getEmployees');



# SERVICEABLE?UNSERVICEABLE
$routes->get('/getDataServiceable', 'ServiceController::getDataServiceable');
$routes->get('/getDataUnserviceable', 'ServiceController::getDataUnserviceable');
$routes->get('/getUserDataServiceable', 'ServiceController::getuserDataServiceable');
$routes->get('/getuserDataUnserviceable', 'ServiceController::getUserDataUnserviceable');
$routes->get('/getDataUser', 'ServiceController::getDataUser');

# REQUEST PPE
$routes->match(['get', 'post'], '/api/request/decline/(:any)', 'DatabasePPEController::declineRecord/$1');
$routes->match(['get', 'post'], '/api/request/approve/(:any)', 'DatabasePPEController::approveRecord/$1');
$routes->match(['get', 'post'], '/api/request/delete/(:any)', 'DatabasePPEController::deleteRecord/$1');








