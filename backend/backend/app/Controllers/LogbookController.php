<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LogbookModel;
use App\Models\EmployeeModel;
use App\Models\InventoryModel;

class LogbookController extends ResourceController
{
    public function index()
    {
        //
    }

    public function getBorrowed(){
        $equipmentborrowed = new LogbookModel();
        $data = $equipmentborrowed->findAll();
        return $this->respond($data);
    }

    public function getCalBorrowed(){
        $equipmentborrowed = new LogbookModel();
        $data = $equipmentborrowed->findAll();
        return $this->respond($data);
    }

    public function fetchEmployee($empfullname)
    {
        $user = new EmployeeModel();
        $data = $user->where('empfullname', $empfullname)->first();
        return $this->respond($data, 200);
    }

    // public function saveBorrowed()
    // {
    //     $main = new LogbookModel();
    
    //     $data = [
    //         'employee' => $this->request->getPost('employee'),
    //         'particulars' => $this->request->getPost('particulars'),
    //     ];
    
    //     $rin = $main->save($data);
    
    //     return $this->respond($rin, 200);
    //     // var_dump($data);
    // }

    public function saveBorrowed()
    {
        // Retrieve particulars from input
        $particulars = $this->request->getPost('particulars');
    
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
                    'employee' => $this->request->getPost('employee'),
                    'particulars' => $particulars,
                ];
    
                $logbookModel = new LogbookModel();
                $result = $logbookModel->save($data);
    
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
    


    public function updateLogbookDateReturned($id, $employee, $datetime)
    {
        $model = new LogbookModel();
        
        // Find the record by ID and employee
        $data = $model->where('id', $id)
                      ->where('employee', $employee)
                      ->first();
    
        if ($data) {
            // Modify the date_returned field
            $data['date_returned'] = $datetime;
    
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
    
}
