<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'check-email', 'DatabasePPEController::checkEmail');



// NOTIFICATION

$routes->get('/notification', 'NotificationController::getNotification');
$routes->post('/markAsRead/(:num)', 'NotificationController::markAsRead/$1');
$routes->post('markAllAsRead', 'NotificationController::markAllAsRead');

$routes->get('/notificationEmp', 'NotificationController::getNotificationEmp');
$routes->post('/markAsReadEmp/(:num)', 'NotificationController::markAsReadEmp/$1');





// DATABASE PPE
$routes->get('/getdata', 'DatabasePPEController::getData');
$routes->match(['get', 'post'], 'getRecordById/(:any)', 'DatabasePPEController::getRecordById/$1');
$routes->match(['get', 'post'], 'getRecordByPropertynum/(:any)', 'DatabasePPEController::getRecordByPropertynum/$1');
$routes->match(['get', 'post'], 'getTransferRecordByPropertynum/(:any)', 'DatabasePPEController::getTransferRecordByPropertynum/$1');
$routes->match(['get', 'post'], 'getDisposeRecordByPropertynum/(:any)', 'DatabasePPEController::getDisposeRecordByPropertynum/$1');
$routes->get('/getDataWithImageVerification', 'DatabasePPEController::getDataWithImageVerification');
$routes->get('/getDataWithoutImageVerification', 'DatabasePPEController::getDataWithoutImageVerification');
$routes->get('/getDataServiceable', 'DatabasePPEController::getDataServiceable');
$routes->get('/getDataUnserviceable', 'DatabasePPEController::getDataUnserviceable');
$routes->get('/getDataReturnedServiceable', 'DatabasePPEController::getDataReturnedServiceable');
$routes->get('/getDataTransferedServiceable', 'DatabasePPEController::getDataTransferedServiceable');
$routes->get('/getDataDisposed', 'DatabasePPEController::getDataDisposed');

$routes->match(['get', 'post'], '/offinfo/(:any)', 'DatabasePPEController::offinfo/$1');

$routes->post('/save', 'DatabasePPEController::save');
$routes->match(['get', 'post'], '/updateppe/(:any)', 'DatabasePPEController::updateppe/$1');
$routes->post('/del', 'DatabasePPEController::del');

$routes->match(['get', 'post'], 'fetch_data/(:any)', 'DatabasePPEController::fetchData/$1');
$routes->match(['get', 'post'], 'update_return/(:any)', 'DatabasePPEController::update_return/$1');
$routes->match(['get', 'post'], 'update_transfer/(:any)', 'DatabasePPEController::update_transfer/$1');
$routes->match(['get', 'post'], 'update_disposal/(:any)', 'DatabasePPEController::update_disposal/$1');
$routes->match(['get', 'post'], '/getDataById/(:any)', 'DatabasePPEController::getDataById/$1');
$routes->match(['get', 'post'], 'update_date_returned/(:any)', 'DatabasePPEController::updateDateReturned/$1');

$routes->post('/delDisposed', 'DatabasePPEController::delDisposed');


$routes->match(['get', 'post'], '/IIRUSPgetData', 'DatabasePPEController::IIRUSPgetData');
$routes->match(['get', 'post'], '/IIRUSPgetData/(:any)', 'DatabasePPEController::IIRUSPgetData/$1');
$routes->get('/RPCSPHIGHgetData', 'DatabasePPEController::RPCSPHIGHgetData');
$routes->get('/RPCSPLOWgetData', 'DatabasePPEController::RPCSPLOWgetData');


//PDF GENERATION
$routes->match(['get', 'post'], '/employeeRecordsPDF', 'DatabasePPEController::employeeRecordsPDF');
$routes->match(['get', 'post'], '/employeeRecordsSPLC', 'DatabasePPEController::employeeRecordsSPLC');
$routes->match(['get', 'post'], '/recordsPDF', 'DatabasePPEController::recordsPDF');
$routes->match(['get', 'post'], '/showemployeerecordPDF/(:any)', 'DatabasePPEController::showemployeerecordPDF/$1');

$routes->match(['get', 'post'], '/stickerPDF', 'DatabasePPEController::stickerPDF');

$routes->get('/api/load-sps-content', 'DatabasePPEController::loadSPSContent');
$routes->post('/api/save-sps-content', 'DatabasePPEController::saveSPSContent');

// $routes->get('editor/load', 'DatabasePPEController::loadFile');
// $routes->post('editor/save', 'DatabasePPEController::saveFile');
// $routes->get('getSpsHtml', 'DatabasePPEController::getSpsHtml');
// $routes->post('saveSpsHtml', 'DatabasePPEController::saveSpsHtml');
// $routes->get('/sps/get-design', 'DatabasePPEController::getDesign');
// $routes->post('/sps/save-design', 'DatabasePPEController::saveDesign');
// $routes->post('/sps/upload-image', 'DatabasePPEController::uploadImage');


$routes->match(['get', 'post'], '/IIRUSP', 'DatabasePPEController::IIRUSP');
$routes->match(['get', 'post'], '/updateIIRUSP/(:any)', 'DatabasePPEController::updateIIRUSP/$1');
$routes->match(['get', 'post'], '/RPCSPLOW', 'DatabasePPEController::RPCSPLOW');
$routes->match(['get', 'post'], '/RPCSPHIGH', 'DatabasePPEController::RPCSPHIGH');
$routes->match(['get', 'post'], '/RegSPI/(:any)', 'DatabasePPEController::RegSPI/$1');
$routes->match(['get', 'post'], '/RegSPI', 'DatabasePPEController::RegSPI');
$routes->match(['get', 'post'], '/getClassifications', 'DatabasePPEController::getClassifications');
$routes->match(['get', 'post'], '/RegSPIdata/(:any)', 'DatabasePPEController::RegSPIdata/$1');
$routes->match(['get', 'post'], '/RegSPIdata', 'DatabasePPEController::RegSPIdata');

//REQUEST
$routes->match(['get', 'post'], '/employeeRequestPDF', 'DatabasePPEController::employeeRequestPDF');
$routes->match(['get', 'post'], '/requestPDF', 'DatabasePPEController::requestPDF');
$routes->match(['get', 'post'], '/generateICSPDF/(:any)', 'DatabasePPEController::generateICSPDF/$1');
$routes->match(['get', 'post'], '/generateRRSPPDF/(:any)', 'DatabasePPEController::generateRRSPPDF/$1');
$routes->match(['get', 'post'], '/generateITRPDF/(:any)', 'DatabasePPEController::generateITRPDF/$1');
$routes->match(['get', 'post'], '/generateIDRPDF/(:any)', 'DatabasePPEController::generateIDRPDF/$1');
$routes->match(['get', 'post'], '/updateVerification/(:any)', 'DatabasePPEController::updateVerification/$1');



// INVENTORY
$routes->get('/getInventory', 'DatabasePPEController::getInventory');

$routes->post('/saveInventory', 'DatabasePPEController::saveInventory');
$routes->post('/delInventory', 'DatabasePPEController::delInventory');
$routes->get('/getReqAdmin', 'DatabasePPEController::getReq');
$routes->match(['get', 'post'], '/updateInventory/(:any)', 'DatabasePPEController::updateInventory/$1');
$routes->match(['get', 'post'], '/updateAvailability', 'DatabasePPEController::updateAvailability');


$routes->get('search-property-number/(:any)', 'DatabasePPEController::searchPropertyNumber/$1');




// SUPPLIES
$routes->get('/getSupplies', 'SupplyController::getSupplies');
$routes->get('/getEmployeesSup', 'SupplyController::getEmployees');
$routes->get('/getEmployeeSupplies', 'SupplyController::getEmployeeSupplies');
$routes->post('/issueSupply', 'SupplyController::issueSupply');
$routes->get('/getEmployeeSuppliesByFullname/(:any)', 'SupplyController::getEmployeeSuppliesByFullname/$1');
$routes->post('/delEmployeeSupplies', 'SupplyController::delEmployeeSupplies');


$routes->get('search-item-number/(:any)', 'SupplyController::searchItemCode/$1');


// PDF GENERATION SUPPLIES

$routes->match(['get', 'post'], '/generateStockCard/(:any)', 'SupplyController::generateStockCard/$1');

// $routes->get('api/supply-prediction/(:any)', 'SupplyController::predictSupplyUsage/$1');
$routes->get('api/supply-prediction', 'SupplyController::predictSupplyUsage');


$routes->post('/saveSupplies', 'SupplyController::saveSupplies');
$routes->post('/delSupplies', 'SupplyController::delSupplies');
$routes->match(['get', 'post'], '/updateSupplies/(:any)', 'SupplyController::updateSupplies/$1');






// SECURITY SIGNIN/SIGNUP
$routes->match(['post', 'get'],'/signin', 'SigninController::signin');
$routes->match(['post', 'get'],'/signup', 'SigninController::signup');

$routes->match(['post', 'get'],'/changePassword', 'SigninController::changePassword');

$routes->post('verifyPassword', 'SigninController::verifyPassword');


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
$routes->get('/getUserDataServiceable/(:any)', 'ServiceController::getuserDataServiceable/$1');
$routes->get('/getUserDataUnserviceable/(:any)', 'ServiceController::getUserDataUnserviceable/$1');
$routes->get('/getDataUser', 'ServiceController::getDataUser');
$routes->get('/getDataUserUnserviceable', 'ServiceController::getDataUserUnserviceable');
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
$routes->get('/getInventoryBorrow', 'LogbookController::getInventoryBorrow');
$routes->match(['get', 'post'], '/fetchEmployee/(:any)', 'LogbookController::fetchEmployee/$1');
$routes->match(['get', 'post'], '/saveBorrowed', 'LogbookController::saveBorrowed');
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
$routes->get('/getOrderReceived', 'OrderController::getOrderReceived');
$routes->get('/getShop', 'OrderController::getShop');
$routes->get('/getArticles', 'OrderController::getArticles');
$routes->get('/getShopsByArticle', 'OrderController::getShopsByArticle');
$routes->post('/delOrder', 'OrderController::delOrder');
$routes->match(['get', 'post'], '/updateReceipt/(:any)', 'OrderController::updateReceipt/$1');
$routes->match(['get', 'post'], '/updateRating/(:segment)/(:segment)', 'OrderController::updateRating/$1/$2');

//PDF GENERATION ORDERING/PURCHASE

$routes->match(['get', 'post'], '/generatePurchaseRequest/(:any)', 'OrderController::generatePurchaseRequest/$1');
