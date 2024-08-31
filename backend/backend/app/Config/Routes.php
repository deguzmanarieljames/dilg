<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// DATABASE PPE
$routes->get('/getdata', 'DatabasePPEController::getData');

$routes->post('/save', 'DatabasePPEController::save');
$routes->match(['get', 'post'], '/updateppe/(:any)', 'DatabasePPEController::updateppe/$1');
$routes->post('/del', 'DatabasePPEController::del');

$routes->match(['get', 'post'], 'fetch_data/(:any)', 'DatabasePPEController::fetchData/$1');
$routes->match(['get', 'post'], '/getDataById/(:any)', 'DatabasePPEController::getDataById/$1');
$routes->match(['get', 'post'], 'update_date_returned/(:any)', 'DatabasePPEController::updateDateReturned/$1');


//PDF GENERATION
$routes->match(['get', 'post'], '/employeeRecordsPDF', 'DatabasePPEController::employeeRecordsPDF');
$routes->match(['get', 'post'], '/recordsPDF', 'DatabasePPEController::recordsPDF');
$routes->match(['get', 'post'], '/showemployeerecordPDF/(:any)', 'DatabasePPEController::showemployeerecordPDF/$1');

$routes->match(['get', 'post'], '/stickerPDF', 'DatabasePPEController::stickerPDF');

$routes->match(['get', 'post'], '/IIRUSP', 'DatabasePPEController::IIRUSP');
$routes->match(['get', 'post'], '/updateIIRUSP/(:any)', 'DatabasePPEController::updateIIRUSP/$1');
$routes->match(['get', 'post'], '/RPCSPLOW', 'DatabasePPEController::RPCSPLOW');
$routes->match(['get', 'post'], '/RPCSPHIGH', 'DatabasePPEController::RPCSPHIGH');
$routes->match(['get', 'post'], '/RegSPI', 'DatabasePPEController::RegSPI');

//REQUEST
$routes->match(['get', 'post'], '/employeeRequestPDF', 'DatabasePPEController::employeeRequestPDF');
$routes->match(['get', 'post'], '/requestPDF', 'DatabasePPEController::requestPDF');
$routes->match(['get', 'post'], '/generatepdf/(:any)', 'DatabasePPEController::generatePDF/$1');
$routes->match(['get', 'post'], '/updateVerification/(:any)', 'DatabasePPEController::updateVerification/$1');



// INVENTORY
$routes->get('/getInventory', 'DatabasePPEController::getInventory');
$routes->post('/saveInventory', 'DatabasePPEController::saveInventory');
$routes->post('/delInventory', 'DatabasePPEController::delInventory');
$routes->get('/getReqAdmin', 'DatabasePPEController::getReq');
$routes->match(['get', 'post'], '/updateInventory/(:any)', 'DatabasePPEController::updateInventory/$1');
$routes->match(['get', 'post'], '/updateAvailability', 'DatabasePPEController::updateAvailability');


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
$routes->match(['get', 'post'], '/updateEmployee/(:any)', 'RequestController::updateEmployee/$1');


$routes->get('/getEmployee', 'DatabasePPEController::getEmployee');
$routes->get('/getEmployees', 'DatabasePPEController::getEmployees');



# SERVICEABLE?UNSERVICEABLE
$routes->get('/getDataServiceable', 'ServiceController::getDataServiceable');
$routes->get('/getDataUnserviceable', 'ServiceController::getDataUnserviceable');
$routes->get('/getUserDataServiceable', 'ServiceController::getuserDataServiceable');
$routes->get('/getUserDataUnserviceable', 'ServiceController::getUserDataUnserviceable');
$routes->get('/getDataUser', 'ServiceController::getDataUser');
$routes->match(['get', 'post'], '/serviceablePDF', 'ServiceController::serviceablePDF');
$routes->match(['get', 'post'], '/unserviceablePDF', 'ServiceController::unserviceablePDF');




# REQUEST PPE
// $routes->match(['get', 'post'], '/api/request/decline/(:any)', 'DatabasePPEController::declineRecord/$1');
// $routes->match(['get', 'post'], '/api/request/approve/(:any)', 'DatabasePPEController::approveRecord/$1');
// $routes->match(['get', 'post'], '/api/request/delete/(:any)', 'DatabasePPEController::deleteRecord/$1');
$routes->match(['post', 'get'], '/updatereqStatus(:any)', 'RequestController::updatereqStatus/$1');





# NOTIFICATION MATTERS
$routes->match(['get', 'post'], '/triggerNotification', 'DatabasePPEController::databaseListener');


# OFFICER VERIFY PPE
$routes->get('/getOfficerVerifyPPE', 'OfficerVerifyController::getOfficerVerifyPPE');
# OFFICER BORROWED/LOGBOOK
$routes->get('/getBorrowed', 'LogbookController::getBorrowed');
$routes->match(['get', 'post'], '/fetchEmployee/(:any)', 'LogbookController::fetchEmployee/$1');
$routes->post('/saveBorrowed', 'LogbookController::saveBorrowed');
$routes->match(['get', 'post'], 'update_logbook_date_returned/(:segment)/(:segment)/(:segment)', 'LogbookController::updateLogbookDateReturned/$1/$2/$3');
$routes->get('/getCalBorrowed', 'LogbookController::getCalBorrowed');


// TOTAL PPE COUNT
$routes->get('/getPPECount', 'DatabasePPEController::getPPECount');
// TOTAL INVENTORY COUNT
$routes->get('/getTotalInventory', 'DatabasePPEController::getTotalInventory');
$routes->get('/getInventoryCount', 'DatabasePPEController::getInventoryCount');
// EMPLOYEE COUNT
$routes->get('/getEmployeeCount', 'DatabasePPEController::getEmployeeCount');



// ORDERING EQUIPMENT
$routes->post('/saveOrder', 'OrderController::saveOrder');
$routes->get('/getOrder', 'OrderController::getOrder');
$routes->get('/getShop', 'OrderController::getShop');
$routes->get('/getArticles', 'OrderController::getArticles');
$routes->get('/getShopsByArticle', 'OrderController::getShopsByArticle');
$routes->match(['get', 'post'], '/updateReceipt/(:any)', 'OrderController::updateReceipt/$1');
$routes->match(['get', 'post'], '/updateRating/(:segment)/(:segment)', 'OrderController::updateRating/$1/$2');