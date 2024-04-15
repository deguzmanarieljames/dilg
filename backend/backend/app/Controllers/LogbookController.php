<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LogbookModel;
use App\Models\EmployeeModel;

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

    public function saveBorrowed()
    {
        $main = new LogbookModel();
    
        $data = [
            'employee' => $this->request->getPost('employee'),
            'particulars' => $this->request->getPost('particulars'),
        ];
    
        $rin = $main->save($data);
    
        return $this->respond($rin, 200);
        // var_dump($data);
    }

    public function updateLogbookDateReturned($id, $employee)
    {
        $model = new LogbookModel();
        
        // Find the record by ID and employee
        $data = $model->where('id', $id)
                      ->where('employee', $employee)
                      ->first();
    
        if ($data) {
            // Modify the date_returned field
            $currentDateTime = date('Y-m-d H:i:s'); // Get the current date and time
            $data['date_returned'] = $currentDateTime;
    
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
