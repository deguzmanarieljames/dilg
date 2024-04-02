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
        $json = $this->request->getJSON();
        // $code = $this->code_gen(8);
    
        // Retrieve particulars from input
        $particulars = $json->particulars;
    
        // Check the status in the inventoryppe table based on particulars
        $inventoryModel = new InventoryModel();
        $statusRows = $inventoryModel->where('particulars', $particulars)->findAll();
    
        // Check if any rows were found
        if (!empty($statusRows)) {
            // Assuming 'status' is a field in the inventory table
            $status = $statusRows[0]['status'];
    
            // Check if the status is active
            if ($status === 'active') {
                // If active, proceed with saving to the databaseppe table
                $data = [
                    'particulars' => $json->particulars,
                    'empfullname' => $json->empfullname,
                    // 'code' => $code,
                ];
    
                $databasePPEModel = new OfficerModel();
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
            'arrival' => $this->request->getPost('arrival')
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
            'arrival' => $this->request->getPost('arrival'),
            'image' => $newName, // Store the image filename
        ];
    
        $rin = $main->save($data);
    
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











    public function databaseListener()
    {
        $newRecord = $this->model->isNewRecordAdded();

        if ($newRecord) {

            $notification = [
                'title' => 'New Record Added!',
                'body' => 'A new record was added in your database.'
            ];

            // Send the notification
            $this->triggerNotification($notification);
        }
        else{
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





    

}


