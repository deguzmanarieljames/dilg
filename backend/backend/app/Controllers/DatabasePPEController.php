<?php

namespace App\Controllers;

// use App\Controllers\RequestController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;
use App\Models\InventoryModel;
use App\Models\EmployeeModel;
use App\Models\RequestModel;
use App\Models\OfficerModel;
use App\Models\SigninModel;
use App\Libraries\FirebaseNotificationService;
use Mpdf\Mpdf;

class DatabasePPEController extends ResourceController
{

    use ResponseTrait;

    protected $model;

    // DATABASE PPE MODEL
    public function index()
    {
        //
    }

    public function __construct()
    {
        $this->model = new InventoryModel();
    }




    #----------------------- DATABASE PPE -----------------------------

    public function getData()
    {
    // Load necessary models
    $databasePPEModel = new DatabasePPEModel();
    $inventoryPPEModel = new InventoryModel();

    // Perform the join query
    $data = $databasePPEModel->select('databaseppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription, inventoryppe.image')
                              ->join('inventoryppe', 'inventoryppe.particulars = databaseppe.particulars', 'left')
                              ->orderBy('databaseppe.id', 'DESC')
                              ->findAll();
                              foreach ($data as &$item) {
                                $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
                                $item['imageverification'] = 'http://dilg.test/backend/uploads/' . $item['imageverification'];
                            }

    // Return the merged data
    return $this->respond($data, 200);
    }

    // public function save()
    // {
    //     $json = $this->request->getJSON();
    //     $code = $this->code_gen(8);
    //     $data = [
    //         'entityname' => $json->entityname,
    //         'particulars' => $json->particulars,
    //         'classification' => $json->classification,
    //         'empfullname' => $json->empfullname,
    //         'code' => $code,
    //     ];
    //     $main = new DatabasePPEModel();
    //     $rin = $main->save($data);
    //     return $this->respond($rin, 200);
    // }
    



    public function save()
    {
        // Retrieve input data
        $entityname = $this->request->getPost('entityname');
        $classification = $this->request->getPost('classification');
        $code = $this->request->getPost('code');
        $article = $this->request->getPost('article');
        $particulars = $this->request->getPost('particulars');
        $modelno = $this->request->getPost('modelno');
        $serialno = $this->request->getPost('serialno');
        $propertynumber = $this->request->getPost('propertynumber');
        $propertydate = $this->request->getPost('propertydate');
        $icsnumber = $this->request->getPost('icsnumber');
        $jevnumber = $this->request->getPost('jevnumber');
        $rec_quantity = $this->request->getPost('rec_quantity');
        $rec_unit = $this->request->getPost('rec_unit');
        $rec_unitcost = $this->request->getPost('rec_unitcost');
        $isstranadjamount = $this->request->getPost('isstranadjamount');
        $accimploss = $this->request->getPost('accimploss');
        $adjustedcost = $this->request->getPost('adjustedcost');
        $repair_nature = $this->request->getPost('repair_nature');
        $repair_amount = $this->request->getPost('repair_amount');
        $issue_itemno = $this->request->getPost('propertynumber');
        $issue_date = $this->request->getPost('issue_date');
        $issue_quantity = $this->request->getPost('rec_quantity');
        $issue_officeofficer = $this->request->getPost('issue_officeofficer');
        $transfer_date = $this->request->getPost('transfer_date');
        $transfer_quantity = $this->request->getPost('transfer_quantity');
        $transfer_officeofficer = $this->request->getPost('transfer_officeofficer');
        $disposal_date = $this->request->getPost('disposal_date');
        $disposal_quantity = $this->request->getPost('disposal_quantity');
        $disposal_officeofficer = $this->request->getPost('disposal_officeofficer');
        $remarks = $this->request->getPost('remarks');
        $estimatedlife = $this->request->getPost('estimatedlife');
        $issued_officer = $this->request->getPost('issued_officer');
        $issued_offposition = $this->request->getPost('issued_offposition');
        $issued_date = $this->request->getPost('issued_date');
        $acc_officer = $this->request->getPost('acc_officer');
        $acc_empposition = $this->request->getPost('acc_empposition');
        $acc_date = $this->request->getPost('acc_date');
        $itr_no = $this->request->getPost('itr_no');
        $itr_date = $this->request->getPost('itr_date');
        $rrsp_no = $this->request->getPost('rrsp_no');
        $rrsp_date = $this->request->getPost('rrsp_date');
        $reasonfortrans = $this->request->getPost('reasonfortrans');
        $reg_semiissuedserialno = $this->request->getPost('reg_semiissuedserialno');
        $reg_returned_qty = $this->request->getPost('reg_returned_qty');
        $reg_reissued_qty = $this->request->getPost('reg_reissued_qty');
        $reg_reissued_off = $this->request->getPost('reg_reissued_off');
        $reg_disposed_qty = $this->request->getPost('reg_disposed_qty');
        $reg_balance_quantity = $this->request->getPost('reg_balance_quantity');
        $reg_amount = $this->request->getPost('reg_amount');
        $reg_remarks = $this->request->getPost('reg_remarks');
        $property_officer = $this->request->getPost('property_officer');
        $approving_authority = $this->request->getPost('approving_authority');

        // Calculate the total cost
        $rec_totalcost = $rec_quantity * $rec_unitcost;
        $balancequantity = $rec_quantity - $issue_quantity;

        // Check the status in the inventoryppe table based on particulars
        $inventoryModel = new InventoryModel();
        $statusRows = $inventoryModel->where('particulars', $particulars)->findAll();

        // Check if any rows were found
        if (!empty($statusRows)) {
            // Assuming 'status' is a field in the inventory table
            $status = $statusRows[0]['status'];

            // Check if the status is active
            if ($status === 'active') {
                // Proceed with saving to the databaseppe table

                // Retrieve other form fields from the input
                $data = [
                    'entityname' => $entityname,
                    'classification' => $classification,
                    'code' => $code,
                    'article' => $article,
                    'particulars' => $particulars,
                    'entityname' => $entityname,
                    'classification' => $classification,
                    'code' => $code,
                    'article' => $article,
                    'particulars' => $particulars,
                    'modelno' => $modelno,
                    'serialno' => $serialno,
                    'propertynumber' => $propertynumber,
                    'propertydate' => $propertydate,
                    'icsnumber' => $icsnumber,
                    'jevnumber' => $jevnumber,
                    'rec_quantity' => $rec_quantity,
                    'rec_unit' => $rec_unit,
                    'rec_unitcost' => $rec_unitcost,
                    'rec_totalcost' => $rec_totalcost,
                    'isstranadjamount' => $isstranadjamount,
                    'accimploss' => $accimploss,
                    'adjustedcost' => $adjustedcost,
                    'repair_nature' => $repair_nature,
                    'repair_amount' => $repair_amount,
                    'issue_itemno' => $issue_itemno,
                    'issue_date' => $issue_date,
                    'issue_quantity' => $issue_quantity,
                    'issue_officeofficer' => $issue_officeofficer,
                    'transfer_date' => $transfer_date,
                    'transfer_quantity' => $transfer_quantity,
                    'transfer_officeofficer' => $transfer_officeofficer,
                    'disposal_date' => $disposal_date,
                    'disposal_quantity' => $disposal_quantity,
                    'disposal_officeofficer' => $disposal_officeofficer,
                    'balancequantity' => $balancequantity,
                    'balanceamount' => $rec_totalcost,
                    'remarks' => $remarks,
                    'estimatedlife' => $estimatedlife,
                    'issued_officer' => $issued_officer,
                    'issued_offposition' => $issued_offposition,
                    'issued_date' > $issued_date,
                    'acc_officer' => $acc_officer,
                    'acc_empposition' => $acc_empposition,
                    'acc_date' => $acc_date,
                    'itr_no' => $itr_no,
                    'itr_date' => $itr_date,
                    'rrsp_no' => $rrsp_no,
                    'rrsp_date' => $rrsp_date,
                    'reasonfortrans' => $reasonfortrans,
                    'reg_semiissuedserialno' => $reg_semiissuedserialno,
                    'reg_returned_qty' => $reg_returned_qty,
                    'reg_returned_off' => $acc_officer,
                    'reg_reissued_qty' => $reg_reissued_qty,
                    'reg_reissued_off' => $reg_reissued_off,
                    'reg_disposed_qty' => $reg_disposed_qty,
                    'reg_balance_quantity' => $reg_balance_quantity,
                    'reg_amount' => $reg_amount,
                    'reg_remarks' => $reg_remarks,
                    'property_officer' => $property_officer,
                    'approving_authority' => $approving_authority,
                ];

                // Save data to the database
                $databasePPEModel = new DatabasePPEModel();
                $result = $databasePPEModel->save($data);

                return $this->respond($result, 200);
            } else {
                // If inactive, do not save and respond accordingly
                return $this->respond(['msg' => 'Cannot save data. Inventory status is inactive.'], 200);
            }
        } else {
            // Handle the case where no matching row was found
            return $this->respond(['msg' => 'Cannot save data. No matching inventory record found.'], 200);
        }
    }

    public function updateppe($statusId)
    {
        // Load the model
        $rec_quantity = $this->request->getPost('rec_quantity');//---------------------------
        $rec_unitcost = $this->request->getPost('rec_unitcost');

        $issue_quantity = $this->request->getPost('rec_quantity');

        $rec_totalcost = $rec_quantity * $rec_unitcost;
        $balancequantity = $rec_quantity - $issue_quantity;

        $model = new DatabasePPEModel();
        $id = $statusId;
        // if ($this->request->getFile('image')->isValid() && $existingImage) {
        //     $uploadsPath = ROOTPATH . '../uploads/'; 
        //     unlink($uploadsPath . $existingImage);
        // }
        // Retrieve data from the request
        $data = [
            'entityname' => $this->request->getPost('entityname'),
            'classification' => $this->request->getPost('classification'),
            'code' => $this->request->getPost('code'),
            'article' => $this->request->getPost('article'),
            'particulars' => $this->request->getPost('particulars'),
            'modelno' => $this->request->getPost('modelno'),
            'serialno' => $this->request->getPost('serialno'),
            'propertynumber' => $this->request->getPost('propertynumber'),
            'propertydate' => $this->request->getPost('propertydate'),
            'icsnumber' => $this->request->getPost('icsnumber'),
            'jevnumber' => $this->request->getPost('jevnumber'),
            // 'rec_quantity' => $this->request->getPost('rec_quantity'),
            'rec_unit' => $this->request->getPost('rec_unit'),
            // 'rec_unitcost' => $this->request->getPost('rec_unitcost'),
            'rec_quantity' => $rec_quantity,
            'rec_unitcost' => $rec_unitcost,
            'rec_totalcost' => $rec_totalcost,
            'isstranadjamount' => $this->request->getPost('isstranadjamount'),
            'accimploss' => $this->request->getPost('accimploss'),
            'adjustedcost' => $this->request->getPost('adjustedcost'),
            'repair_nature' => $this->request->getPost('repair_nature'),
            'repair_amount' => $this->request->getPost('repair_amount'),
            'issue_itemno' => $this->request->getPost('propertynumber'),
            'issue_date' => $this->request->getPost('issue_date'),
            'issue_quantity' => $issue_quantity,
            'issue_officeofficer' => $this->request->getPost('issue_officeofficer'),
            'transfer_date' => $this->request->getPost('transfer_date'),
            'transfer_quantity' => $this->request->getPost('transfer_quantity'),
            'transfer_officeofficer' => $this->request->getPost('transfer_officeofficer'),
            'disposal_date' => $this->request->getPost('disposal_date'),
            'disposal_quantity' => $this->request->getPost('disposal_quantity'),
            'disposal_officeofficer' => $this->request->getPost('disposal_officeofficer'),
            'balancequantity' => $balancequantity,
            'balanceamount' => $rec_totalcost,
            'remarks' => $this->request->getPost('remarks'),
            'estimatedlife' => $this->request->getPost('estimatedlife'),
            'issued_officer' => $this->request->getPost('issued_officer'),
            'issued_offposition' => $this->request->getPost('issued_offposition'),
            'issued_date' => $this->request->getPost('issued_date'),
            'acc_officer' => $this->request->getPost('acc_officer'),
            'acc_empposition' => $this->request->getPost('acc_empposition'),
            'acc_date' => $this->request->getPost('acc_date'),
            'itr_no' => $this->request->getPost('itr_no'),
            'itr_date' => $this->request->getPost('itr_date'),
            'rrsp_no' => $this->request->getPost('rrsp_no'),
            'rrsp_date' => $this->request->getPost('rrsp_date'),
            'reasonfortrans' => $this->request->getPost('reasonfortrans'),
            'reg_semiissuedserialno' => $this->request->getPost('reg_semiissuedserialno'),
            'reg_returned_qty' => $this->request->getPost('reg_returned_qty'),
            'reg_returned_off' => $this->request->getPost('acc_officer'),
            'reg_reissued_qty' => $this->request->getPost('reg_reissued_qty'),
            'reg_reissued_off' => $this->request->getPost('reg_reissued_off'),
            'reg_disposed_qty' => $this->request->getPost('reg_disposed_qty'),
            'reg_balance_quantity' => $this->request->getPost('reg_balance_quantity'),
            'reg_amount' => $this->request->getPost('reg_amount'),
            'reg_remarks' => $this->request->getPost('reg_remarks'),
            'property_officer' => $this->request->getPost('property_officer'),
            'approving_authority' => $this->request->getPost('approving_authority'),
        ];
        // $existingRecord = $model->find($id);
        // $existingImage = $existingRecord['image'];

        // Check if an image is uploaded
        // if ($this->request->getFile('image') && $this->request->getFile('image')->isValid()) {
        //     $uploadsPath = ROOTPATH . '../uploads/'; 
        //     unlink($uploadsPath . $existingImage);
        //     $image = $this->request->getFile('image');
        //     $newName = $image->getRandomName();
        //     $image->move('./uploads', $newName);
        //     $data['image'] = $newName; // Update the image field with the new image name
        // }
        
        // Perform the update operation
        $result = $model->update($id, $data);
        
        if ($result) {
            return $this->respond(['status' => 'success', 'message' => 'Record updated successfully']);
        } else {
            // Handle the case where the update fails
            return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
        }
    }



    // public function save()
    // {
    //     $json = $this->request->getJSON();
    //     // $code = $this->code_gen(8);
    
    //     // Retrieve particulars from input
    //     $particulars = $json->particulars;
    
    //     // Check the status in the inventoryppe table based on particulars
    //     $inventoryModel = new InventoryModel();
    //     $statusRows = $inventoryModel->where('particulars', $particulars)->findAll();
    
    //     // Check if any rows were found
    //     if (!empty($statusRows)) {
    //         // Assuming 'status' is a field in the inventory table
    //         $status = $statusRows[0]['status'];
    
    //         // Check if the status is active
    //         if ($status === 'active') {
    //             // If active, proceed with saving to the databaseppe table
    //             $data = [
    //                 'entityname' => $json->entityname,
    //                 'classification' => $json->classification,
    //                 'code' => $json->code,
    //                 'article' => $json->article,
    //                 'particulars' => $particulars,
    //                 'modelno' => $json->modelno,
    //                 'serialno' => $json->serialno,
    //                 'propertynumber' => $json->propertynumber,
    //                 'propertydate' => $json->propertydate,
    //                 'icsnumber' => $json->icsnumber,
    //                 'jevnumber' => $json->jevnumber,
    //                 'rec_quantity' => $json->rec_quantity,
    //                 'rec_unit' => $json->rec_unit,
    //                 'rec_unitcost' => $json->rec_unitcost,
    //                 'isstranadjamount' => $json->isstranadjamount,
    //                 'accimploss' => $json->accimploss,
    //                 'adjustedcost' => $json->adjustedcost,
    //                 'repair_nature' => $json->repair_nature,
    //                 'repair_amount' => $json->repair_amount,
    //                 'issue_date' => $json->issue_date,
    //                 'issue_officeofficer' => $json->issue_officeofficer,
    //                 'transfer_date' => $json->transfer_date,
    //                 'transfer_quantity' => $json->transfer_quantity,
    //                 'transfer_officeofficer' => $json->transfer_officeofficer,
    //                 'disposal_date' => $json->disposal_date,
    //                 'disposal_quantity' => $json->disposal_quantity,
    //                 'disposal_officeofficer' => $json->disposal_officeofficer,
    //                 'remarks' => $json->remarks,
    //                 'estimatedlife' => $json->estimatedlife,
    //                 'issued_officer' => $json->issued_officer,
    //                 'issued_offposition' => $json->issued_offposition,
    //                 'acc_officer' => $json->acc_officer,
    //                 'acc_empposition' => $json->acc_empposition,
    //                 'acc_date' => $json->acc_date,
    //                 'itr_no' => $json->itr_no,
    //                 'itr_date' => $json->itr_date,
    //                 'rrsp_no' => $json->rrsp_no,
    //                 'rrsp_date' => $json->rrsp_date,
    //                 'reasonfortrans' => $json->reasonfortrans,
    //                 'reg_semiissuedserialno' => $json->reg_semiissuedserialno,
    //                 'reg_returned_qty' => $json->reg_returned_qty,
    //                 'reg_reissued_qty' => $json->reg_reissued_qty,
    //                 'reg_reissued_off' => $json->reg_reissued_off,
    //                 'reg_disposed_qty' => $json->reg_disposed_qty,
    //                 'reg_balance_quantity' => $json->reg_balance_quantity,
    //                 'reg_amount' => $json->reg_amount,
    //                 'reg_remarks' => $json->reg_remarks,
    //                 'property_officer' => $json->property_officer,
    //                 'approving_authority' => $json->approving_authority,
    //             ];
    
    //             $model = new DatabasePPEModel();
    //             $result = $model->save($data);
    
    //             return $this->respond($result, 200);
    //         } else {
    //             // If inactive, do not save and respond accordingly
    //             return $this->respond(['msg' => 'Cannot save data. Inventory status is inactive.'], 200);
    //         }
    //     } else {
    //         // Handle the case where no matching row was found
    //         return $this->respond(['msg' => 'Cannot save data. No matching inventory record found.'], 200);
    //     }
    //     return $this->respond(['msg' => 'The Data is not saving, there is an error'], 200);
    // }

    public function savesInventory()
    {
        $main = new InventoryModel();
        $image = $this->request->getFile('image');
        $newName = null;
    
        // Check if an image was uploaded
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . '../uploads', $newName);
        }
    
        $data = [
            'entityname' => $this->request->getPost('entityname'),
            'classification' => $this->request->getPost('classification'),
            'code' => $this->request->getPost('code'),
            'article' => $this->request->getPost('article'),
            'particulars' => $this->request->getPost('particulars'),
            'modelno' => $this->request->getPost('modelno'),
            'serialno' => $this->request->getPost('serialno'),
            'quantity' => $this->request->getPost('quantity'),
            'arrival' => $this->request->getPost('arrival'),
            'image' => $newName, // Store the image filename
        ];
    
        $rin = $main->save($data);
    
        return $this->respond($rin, 200);
    }
    

    public function code_gen($length) {
        $str_result = '1234567890';
    
        // Loop until a unique code is generated
        do {
            $generatedCode = substr(str_shuffle($str_result), 0, $length);
        } while ($this->codeExists($generatedCode));
    
        return $generatedCode;
    }
    
    // Helper function to check if a code already exists in the database
    private function codeExists($code) {
        $main = new DatabasePPEModel();
        $existingCodes = $main->where('code', $code)->findAll();
        return !empty($existingCodes);
    }

    public function updateInventory($statusId)
    {
        // Load the model
        $model = new InventoryModel();
        $id = $statusId;
        // if ($this->request->getFile('image')->isValid() && $existingImage) {
        //     $uploadsPath = ROOTPATH . '../uploads/'; 
        //     unlink($uploadsPath . $existingImage);
        // }
        // Retrieve data from the request
        $data = [
            'entityname' => $this->request->getPost('entityname'),
            'classification' => $this->request->getPost('classification'),
            'code' => $this->request->getPost('code'),
            'article' => $this->request->getPost('article'),
            'particulars' => $this->request->getPost('particulars'),
            'modelno' => $this->request->getPost('modelno'),
            'serialno' => $this->request->getPost('serialno'),
            'quantity' => $this->request->getPost('quantity'),
            'unit' => $this->request->getPost('unit'),
            'unitcost' => $this->request->getPost('unitcost'),
            'totalcost' => $this->request->getPost('totalcost'),
        ];
        $existingRecord = $model->find($id);
        $existingImage = $existingRecord['image'];

        // Check if an image is uploaded
        if ($this->request->getFile('image') && $this->request->getFile('image')->isValid()) {
            $uploadsPath = ROOTPATH . '../uploads/'; 
            unlink($uploadsPath . $existingImage);
            $image = $this->request->getFile('image');
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);
            $data['image'] = $newName; // Update the image field with the new image name
        }
        
        // Perform the update operation
        $result = $model->update($id, $data);
        
        if ($result) {
            return $this->respond(['status' => 'success', 'message' => 'Record updated successfully']);
        } else {
            // Handle the case where the update fails
            return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
        }
    }

    public function updateAvailability()
    {
        $requestData = $this->request->getJSON();
        $id = $requestData->id;
        $newAvailability = $requestData->availability; // Added this line to get the new availability

        $allowedAvailabilities = ['yes', 'no']; // Define allowed availabilities

        if (!in_array($newAvailability, $allowedAvailabilities)) {
            return $this->respond(['error' => 'Invalid availability'], 400);
        }

        $inventoryModel = new InventoryModel(); // Assuming your model is named InventoryModel
        $inventoryModel->update($id, ['availability' => $newAvailability]);

        return $this->respond(['message' => 'Availability updated successfully'], 200);
    }


    // public function updateInventory($statusId)
    // {
    //     // Load the model
    //     $model = new InventoryModel();
    //     $id = $statusId;
        
    //     // Retrieve data from the request
    //     $data = [
    //         'entityname' => $this->request->getPost('entityname'),
    //         'classification' => $this->request->getPost('classification'),
    //         'code' => $this->request->getPost('code'),
    //         'article' => $this->request->getPost('article'),
    //         'particulars' => $this->request->getPost('particulars'),
    //         'modelno' => $this->request->getPost('modelno'),
    //         'serialno' => $this->request->getPost('serialno'),
    //         'quantity' => $this->request->getPost('quantity'),
    //         'arrival' => $this->request->getPost('arrival')
    //     ];
        
    //     // Retrieve the existing image name
    //     $existingRecord = $model->find($id);
    //     $existingImage = $existingRecord['image'];
    
    //     // Check if an image is uploaded
    //     if ($this->request->getFile('image')->isValid()) {
    //         $image = $this->request->getFile('image');
    //         $newName = $image->getRandomName();
    //         $image->move('./uploads', $newName);
    //         $data['image'] = $newName; // Update the image field with the new image name
    //     }
    
    //     // Perform the update operation
    //     $result = $model->update($id, $data);
    
    //     if ($result) {
    //         return $this->respond(['status' => 'success', 'message' => 'Record updated successfully']);
    //     } else {
    //         // Handle the case where the update fails
    //         return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
    //     }
    // }

        // public function updateInventory($statusId)
    // {
    //     // Load the model
    //     $json = $this->request->getJSON();
    //     $id = $statusId;
     
    //     // Retrieve data from the request
    //     $data = [
    //         'entityname' => $json->entityname,
    //         'particulars' => $json->particulars,
    //         'classification' => $json->classification,
    //         'quantity' => $json->quantity,
    //         'arrival' => $json->arrival
    //     ];
        
    //     // $data = [
    //     //     'entityname' => $this->request->getPost('entityname'),
    //     //     'particulars' => $this->request->getPost('particulars'),
    //     //     'classification' => $this->request->getPost('classification'),
    //     //     'quantity' => $this->request->getPost('quantity'),
    //     //     'arrival' => $this->request->getPost('arrival')
    //     // ];
    
    //     $model = new InventoryModel();
    //     // Perform the update operation
    //     $result = $model->update($id, $data);
    
    //     if ($result) {
    //         return $this->respond(['status' => 'success', 'message' => 'Record updated successfully', 'entityname' => $data]);
    //     } else {
    //         // Handle the case where the update fails
    //         return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
    //     }
    // }




    public function del(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        $main = new DatabasePPEModel();
        $ron = $main->delete($id);
        return $this->respond($ron, 200);
    }

    public function getEmployees(){
        $employeeModel = new EmployeeModel();
        $employees = $employeeModel->findAll();
        return $this->respond($employees);
    }

    public function getEmployee($empfullname)
    {
        $employeeModel = new EmployeeModel();
        $employee = $employeeModel->find($empfullname);

        if ($employee === null) {
            return $this->failNotFound('Employee not found');
        }

        return $this->respond($employee);
    }

        // Append the image path to each inventory item
        // foreach ($data as &$item) {
        //     // Assuming $item['image'] contains the filename of the image
        //     $item['image'] = base_url('public/uploads/' . $item['image']);
        // }

    // INVENTORY MODEL
    // public function getInventory()
    // {
    //     $main = new InventoryModel();
    //     $data = $main->findAll();  
    //     foreach ($data as &$item) {
    //         $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
    //     }
    
    //     return $this->respond($data, 200);
    // }

    public function getInventory()
    {
        $main = new InventoryModel();
        $data = $main->orderBy('id', 'DESC') // Order by created_at column in descending order
                    ->findAll();
        foreach ($data as &$item) {
            $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
        }

        return $this->respond($data, 200);
    }


    // public function saveInventory()
    // {
    //     $json = $this->request->getJSON();
    //     $data = [
    //         'entityname' => $json->entityname,
    //         'particulars' => $json->particulars,
    //         'classification' => $json->classification,
    //         'quantity' => $json->quantity,
    //         'arrival' => $json->arrival,
    //     ];
    //     $main = new InventoryModel();
    //     $rin = $main->save($data);
    //     return $this->respond($rin, 200);
    // }

    // public function saveInventory()
    // {
    //     $main = new InventoryModel();
    //     $image = $this->request->getFile('image');
    //     $newName = null;
    
    //     // Check if an image was uploaded
    //     if ($image->isValid() && !$image->hasMoved()) {
    //         $newName = $image->getRandomName();
    //         $image->move(ROOTPATH . '../uploads', $newName);
    //     }
    
    //     $data = [
    //         'entityname' => $this->request->getPost('entityname'),
    //         'classification' => $this->request->getPost('classification'),
    //         'code' => $this->request->getPost('code'),
    //         'article' => $this->request->getPost('article'),
    //         'particulars' => $this->request->getPost('particulars'),
    //         'modelno' => $this->request->getPost('modelno'),
    //         'serialno' => $this->request->getPost('serialno'),
    //         'quantity' => $this->request->getPost('quantity'),
    //         'arrival' => $this->request->getPost('arrival'),
    //         'image' => $newName, // Store the image filename
    //     ];
    
    //     $rin = $main->save($data);
    
    //     return $this->respond($rin, 200);
    // }
    public function saveInventory()
    {
        $main = new InventoryModel();
        $image = $this->request->getFile('image');
        $newName = null;

        // Check if an image was uploaded
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . '../uploads', $newName);
        }

        $data = [
            'entityname' => $this->request->getPost('entityname'),
            'classification' => $this->request->getPost('classification'),
            'code' => $this->request->getPost('code'),
            'article' => $this->request->getPost('article'),
            'particulars' => $this->request->getPost('particulars'),
            'modelno' => $this->request->getPost('modelno'),
            'serialno' => $this->request->getPost('serialno'),
            'quantity' => $this->request->getPost('quantity'),
            'unit' => $this->request->getPost('unit'),
            'unitcost' => $this->request->getPost('unitcost'),
            'totalcost' => $this->request->getPost('totalcost'),
            // 'arrival' => $this->request->getPost('arrival'),
            'image' => $newName, // Store the image filename
        ];

        $rin = $main->save($data);

        // Call the databaseListener function with the particular name
        $this->databaseListener($particularName);

        return $this->respond($rin, 200);
    }

    


    // public function saveInventory()
    // {
    //     $image = $this->request->getFile('image');
    //     if ($image->isValid() && !$image->hasMoved()) {
    //         $newName = $image->getRandomName();
    //         $image->move(ROOTPATH . 'public/uploads', $newName);
    //         $imagePath = 'uploads/' . $newName;
    //     } else {
    //         $imagePath = null;
    //     }
    
    //     $json = $this->request->getJSON();
    //     $data = [
    //         'entityname' => $json->entityname,
    //         'particulars' => $json->particulars,
    //         'classification' => $json->classification,
    //         'quantity' => $json->quantity,
    //         'arrival' => $json->arrival,
    //         'image_path' => $imagePath,
    //     ];
    //     $main = new InventoryModel();
    //     $rin = $main->save($data);
    //     return $this->respond($rin, 200);
    // }

    // public function saveInventory()
    // {
    //     $data = $this->request->getPost();
        
    //     // Add validation if needed

    //     $result = $this->model->saveInventory($data);

    //     return $this->respondCreated(['status' => 'success', 'message' => 'Record saved successfully']);
    // }


    // public function delInventory(){
    //     $json = $this->request->getJSON();  
    //     $id = $json->id;
    //     $main = new InventoryModel();
    //     $ron = $main->delete($id);
    //     return $this->respond($ron, 200);
    // }

    public function delInventory(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        
        // Retrieve the image file name associated with the record
        $main = new InventoryModel();
        $record = $main->find($id);
        $imageName = $record['image']; // Assuming 'image' is the column name storing the image file name
        
        // Delete the record
        $ron = $main->delete($id);
        
        // Delete the corresponding image file from the uploads folder
        if (!empty($imageName)) {
            $uploadsPath = ROOTPATH . '../uploads/'; // Adjust the path to your uploads folder
            $imagePath = $uploadsPath . $imageName; 
            
            // Check if the file exists before attempting deletion
            if (file_exists($imagePath)) {
                // Attempt to delete the file
                if (unlink($imagePath)) {
                    // File deletion successful
                    return $this->respond($ron, 200);
                } else {
                    // File deletion failed
                    return $this->respond(['status' => 'error', 'message' => 'Failed to delete file'], 500);
                }
            } else {
                // File does not exist
                return $this->respond(['status' => 'error', 'message' => 'File not found'], 404);
            }
        } else {
            // No image associated with the record
            return $this->respond($ron, 200);
        }
    }


    public function getReq()
    {
        $main = new RequestModel();
        $data = $main->findAll();
        // log_message('info', json_encode($data)); // Log the response
        return $this->respond($data, 200);
    }


    public function fetchData($id)
    {
        $user = new DatabasePPEModel();
        $data = $user->where('id', $id)->first();
        return $this->respond($data, 200);
    }

    public function updateDateReturned($id)
    {
        $model = new DatabasePPEModel();
        $data = $model->find($id);

        if ($data) {
            // Modify the date_returned field
            $currentDate = date('Y-m-d');
            $data['date_returned'] = $currentDate;

            // Attempt to update the record in the database
            $updated = $model->update($id, $data);

            if ($updated) {
                return $this->respond(['message' => 'Date returned updated successfully']);
            } else {
                return $this->failServerError('Failed to update the record');
            }
        } else {
            return $this->failNotFound('Data not found');
        }
    }

    public function approveRecord($id)
    {
        $model = new RequestModel();
        $model->update($id, ['status' => 'Approved']);
        return $this->respondUpdated(['message' => 'Record approved successfully']);
    }
    
    // Function to handle declining
    public function declineRecord($id)
    {
        $model = new RequestModel();
        $model->update($id, ['status' => 'Declined']);
        return $this->respondUpdated(['message' => 'Record declined successfully']);
    }
    
    // Function to handle deletion
    public function deleteRecord($id)
    {
        $model = new RequestModel();
        
        // Check if the record exists before deleting
        $existingRecord = $model->find($id);
        
        if (!$existingRecord) {
            return $this->respond(['message' => 'Record not found'], 404);
        }
    
        $model->delete($id);
        return $this->respondDeleted(['message' => 'Record deleted successfully']);
    }











    // public function databaseListener()
    // {
    //     $newRecord = $this->model->isNewRecordAdded();

    //     if ($newRecord) {

    //         $notification = [
    //             'title' => 'New Record Added!',
    //             'body' => 'A new record was added in your database.'
    //         ];

    //         // Send the notification
    //         $this->triggerNotification($notification);
    //     }
    //     else{
    //         return $this->respond('no changes');
    //     }
    // }

    public function databaseListener($particularName)
    {
        $newRecord = $this->model->isNewRecordAdded();

        if ($newRecord) {
            $notification = [
                'title' => 'New Record Added!',
                'body' => "A new record for particular '$particularName' was added in your database."
            ];

            // Send the notification
            $this->triggerNotification($notification);
        } else {
            return $this->respond('no changes');
        }
    }


    public function triggerNotification($notification)
    {
        $serverKey = 'AAAAzBIVFVU:APA91bGJkYZ654QZke2_3HUrfKGBrcCrkbI3tBdDLB4MOvus8Nuwj1bvAPkVyhPtmMYjgOfRdW7OgyjTfx3ZvWbxHfUgNCxljHcVhZUKD8uSn7FCqqcCpvshqehCytqsAWGUJnWvJKj1';

        $headers = [
            'Authorization: key=' . $serverKey,
            'Content-Type: application/json'
        ];

        $payload = [
            'notification' => $notification,
            'to' => 'fpmv5df5Gj3F_Ja6TMgHzY:APA91bE6nLxWXDGo0mTSbnEMF3twaHHbBZzOfngWNTcZgBUuSyGaGc0pxXkjGG3s5pTF7qOnu0y2P868PpYyRV7OSAMrXHrxthvzGVK-zSanAeFCXOegyuLp3VyfJa6GQ_ZwH4yLIP3h' // You can target specific devices or topics
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

        $result = curl_exec($ch);
        curl_close($ch);

        // Handle the result accordingly

        if ($result === FALSE) {
            return $this->respond(['status' => 'error', 'message' => 'Failed to send notification', 'payload' => $payload], 500);
        } else {
            return $this->respond(['status' => 'success', 'message' => 'Notification sent successfully', 'payload' => $payload]);
        }
    }


    public function getEmployeeCount()
    {
        // Instantiate the EmployeeModel
        $employeeModel = new SigninModel();
        
        // Exclude records where the position is 'Admin'
        $employeeModel->where('position !=', 'Admin');
        
        // Retrieve the count of employees using the countAllResults() method
        $employeeCount = $employeeModel->countAllResults();
        
        // Return the count in JSON format
        return $this->respond(['employeeCount' => $employeeCount], 200);
    }
    


    public function getTotalInventory()
    {
        // Instantiate the EmployeeModel
        $inventoryModel = new InventoryModel();
        
        // Retrieve the count of employees using the countAllResults() method
        $inventoryCount = $inventoryModel->countAllResults();
        
        // Return the count in JSON format
        return $this->respond(['inventoryCount' => $inventoryCount], 200);
    }

    public function getPPECount()
    {
        // Instantiate the EmployeeModel
        $ppeModel = new DatabasePPEModel();
        
        // Retrieve the count of employees using the countAllResults() method
        $ppeCount = $ppeModel->countAllResults();
        
        // Return the count in JSON format
        return $this->respond(['ppeCount' => $ppeCount], 200);
    }

    public function getInventoryCount()
    {
        $main = new InventoryModel();
        $inventoryppe = $main->findAll(); // Retrieve all inventory entries
        $count = count($inventoryppe); // Count all entries
    
        // Extract particulars and quantities from inventory entries
        $particulars = [];
        $counts = [];
        foreach ($inventoryppe as $item) {
            $particulars[] = $item['particulars'];
            $counts[] = $item['counts'];
        }
    
        return $this->respond([
            'count' => $count,
            'particulars' => $particulars,
            'counts' => $counts
        ], 200);
    }


//------------------------------    P D F  G E N E R A T I O N   ---------------------------------------

public function generatePDF($recordId)
{
    // Ensure recordId is provided
    if (!$recordId) {
        die("Record ID is required.");
    }

    $databaseppemodel = new DatabasePPEModel();

    // Fetch the data based on the provided recordId
    $data = $databaseppemodel->where('id', $recordId)->first();

    if ($data) {
        // Load the MPDF library
        $mpdf = new \Mpdf\Mpdf(); // Ensure correct namespacing

        // Generate HTML content dynamically based on record data
        $htmlContent = view('ICS', ['data' => [$data]]); // Pass the record to the view

        // Write HTML content to PDF
        $mpdf->WriteHTML($htmlContent);

        // Output the PDF
        $mpdf->Output('generated_pdf.pdf', 'D'); // 'D' to force download

        exit(); // End script execution after downloading the PDF
    } else {
        // Handle the case where the record is not found
        die("Record with ID $recordId not found.");
    }
}



    public function employeeRecordsPDF()
    {
        // Get the selected employee name from the request
        $requestData = $this->request->getJSON();
        $selectedEmployee = $requestData->acc_officer;

        $records = [];
        $databaseppemodel = new DatabasePPEModel();

        // Get records for the selected employee
        $data = $databaseppemodel->where('acc_officer', $selectedEmployee)
                                ->findAll();

        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf();


            // Add each record to the array
            foreach ($data as $record) {
                $records[] = $record;
            }

            $htmlContent = view('ICS', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);

            // Output the PDF with a unique filename
            $filename = $selectedEmployee . '_records.pdf';
            $mpdf->Output($filename, 'D'); // 'D' to force download

            // End script execution after downloading the PDF
            exit();
        } else {
            // Handle the case where no records found
            die("No records found for employee: $selectedEmployee");
        }
    }


    // public function recordsPDF()
    // {
    //     $records = [];
    //     $databaseppemodel = new DatabasePPEModel();
        
    //     // Get all records
    //     $data = $databaseppemodel->findAll();
        
    //     // Check if any records found
    //     if ($data) {
    //         // Load the MPDF library
    //         $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'format' => 'Legal']);
    
        
    //         foreach ($data as $record) {
    //             // Add each record to the array
    //             $records[] = $record;
    //         }
    
    //         $htmlContent = view('RPCSP', ['data' => $records]);
    //         $mpdf->WriteHTML($htmlContent);
            
    //         // Output the PDF with a unique filename
    //         $filename = 'generated_pdf_all.pdf';
    //         $mpdf->Output($filename, 'D'); // 'D' to force download
        
    //         // End script execution after downloading the PDF
    //         exit();
    //     } else {
    //         // Handle the case where no records found
    //         die("No records found.");
    //     }
    // }

    public function recordsPDF()
    {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }

            // Generate the HTML content from the view
            $htmlContent = view('ICS', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found.");
        }
    }

    public function stickerPDF()
    {
        // Get the JSON request body
        $id = $this->request->getJSON();
        $ids = $id->ids;
        
        //Ensure $ids is an array and not empty
        if (!is_array($ids) || empty($ids)) {
            return $this->response->setStatusCode(400)
                ->setBody("Invalid input: IDs must be a non-empty array.");
        }
        
        // Initialize records array
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get records based on the array of IDs
        $data = $databaseppemodel->whereIn('id', $ids)->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
            
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }
            
            // Generate the HTML content from the view
            $htmlContent = view('SPS', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                ->setBody("No records found.");
        }
        var_dump($ids);
    }
    


    public function showemployeerecordPDF($selectedshowEmployeePDF)
    {
        // Get the selected employee name from the request

        $databaseppemodel = new DatabasePPEModel();

        // Get records for the selected employee
        $data = $databaseppemodel->where('acc_officer', $selectedshowEmployeePDF)
                                ->findAll();

        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf();

            // Generate the HTML content from the view
            $htmlContent = view('ICS', ['data' => $data]);
            $mpdf->WriteHTML($htmlContent);

            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string

            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found for employee: $selectedshowEmployeePDF");
        }
    }



    public function IIRUSP()
    {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }

            // Generate the HTML content from the view
            $htmlContent = view('IIRUSP', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found.");
        }
    }

    public function updateIIRUSP($unservId)
    {
        // Load the model
        $model = new DatabasePPEModel();
        $id = $unservId;
        // if ($this->request->getFile('image')->isValid() && $existingImage) {
        //     $uploadsPath = ROOTPATH . '../uploads/'; 
        //     unlink($uploadsPath . $existingImage);
        // }
        // Retrieve data from the request
        $data = [
            'issue_date' => $this->request->getPost('issue_date'),
            'propertynumber' => $this->request->getPost('propertynumber'),
            'rec_quantity' => $this->request->getPost('rec_quantity'),
            'rec_unitcost' => $this->request->getPost('rec_unitcost'),
            'accimploss' => $this->request->getPost('accimploss'),
            'remarks' => $this->request->getPost('remarks'),
        ];
        
        // Perform the update operation
        $result = $model->update($id, $data);
        
        if ($result) {
            return $this->respond(['status' => 'success', 'message' => 'Record updated successfully']);
        } else {
            // Handle the case where the update fails
            return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
        }
    }



    public function RPCSPLOW()
    {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }

            // Generate the HTML content from the view
            $htmlContent = view('RPCSP', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found.");
        }
    }


    public function RPCSPHIGH()
    {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }

            // Generate the HTML content from the view
            $htmlContent = view('RPCSP', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found.");
        }
    }


    public function RegSPI()
    {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['format' => 'Legal']);
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }

            // Generate the HTML content from the view
            $htmlContent = view('RegSPI', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Capture the PDF output as a string
            $pdfOutput = $mpdf->Output('', 'S'); // 'S' to return as a string
            
            // Return the PDF as a response
            return $this->response->setHeader('Content-Type', 'application/pdf')
                                ->setBody($pdfOutput);
        } else {
            // Handle the case where no records are found
            return $this->response->setStatusCode(404)
                                ->setBody("No records found.");
        }
    }
//------------------------ REQUEST PDF-------------------------


public function requestPDF()
{
    $records = [];
    $requestmodel = new RequestModel();
    
    // Get all records
    $data = $requestmodel->findAll();
    
    // Check if any records found
    if ($data) {
        // Load the MPDF library
        $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'format' => 'Legal']);

    
        foreach ($data as $record) {
            // Add each record to the array
            $records[] = $record;
        }

        $htmlContent = view('pdf_template', ['data' => $records]);
        $mpdf->WriteHTML($htmlContent);
        
        // Output the PDF with a unique filename
        $filename = 'requests_pdf_all.pdf';
        $mpdf->Output($filename, 'D'); // 'D' to force download
    
        // End script execution after downloading the PDF
        exit();
    } else {
        // Handle the case where no records found
        die("No records found.");
    }
}

public function employeeRequestPDF()
{
    // Get the selected employee name from the request
    $requestData = $this->request->getJSON();
    $selectedEmployee = $requestData->empfullname;

    $records = [];
    $requestmodel = new RequestModel();

    // Get records for the selected employee
    $data = $requestmodel->where('empfullname', $selectedEmployee)
                            ->findAll();

    // Check if any records found
    if ($data) {
        // Load the MPDF library
        $mpdf = new \Mpdf\Mpdf();


        // Add each record to the array
        foreach ($data as $record) {
            $records[] = $record;
        }

        $htmlContent = view('pdf_template', ['data' => $records]);
        $mpdf->WriteHTML($htmlContent);

        // Output the PDF with a unique filename
        $filename = $selectedEmployee . '_requests.pdf';
        $mpdf->Output($filename, 'D'); // 'D' to force download

        // End script execution after downloading the PDF
        exit();
    } else {
        // Handle the case where no records found
        die("No records found for employee: $selectedEmployee");
    }
}











    public function updateVerification($selectedRecord)
    {
        // Load the model
        $model = new DatabasePPEModel();
        $id = $selectedRecord;

        $existingRecord = $model->find($id);
        $existingImage = $existingRecord['imageverification'];

        if($existingImage) {
            $uploadsPath = ROOTPATH . '../uploads/'; 
            unlink($uploadsPath . $existingImage);
        }



        // Check if an image is uploaded
        if ($this->request->getFile('imageverification') && $this->request->getFile('imageverification')->isValid()) {
            // $uploadsPath = ROOTPATH . '../uploads/'; 
            // unlink($uploadsPath . $existingImage);
            $image = $this->request->getFile('imageverification');
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);
            $data['imageverification'] = $newName; // Update the image field with the new image name
        }
        
        // Perform the update operation
        $result = $model->update($id, $data);
        
        if ($result) {
            return $this->respond(['status' => 'success', 'message' => 'Record updated successfully']);
        } else {
            // Handle the case where the update fails
            return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
        }
    }
    


    

}


