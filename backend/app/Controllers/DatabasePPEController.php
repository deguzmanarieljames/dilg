<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;
use App\Models\InventoryModel;
use App\Models\EmployeeModel;

class DatabasePPEController extends ResourceController
{

    // DATABASE PPE MODEL
    public function index()
    {
        //
    }

    public function getData()
    {
        $main = new DatabasePPEModel();
        $data = $main->findAll();
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
        $code = $this->code_gen(8);
    
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
                    'entityname' => $json->entityname,
                    'particulars' => $particulars,
                    'classification' => $json->classification,
                    'empfullname' => $json->empfullname,
                    'code' => $code,
                ];
    
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



    // INVENTORY MODEL
    public function getInventory()
    {
        $main = new InventoryModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    public function saveInventory()
    {
        $json = $this->request->getJSON();
        $data = [
            'entityname' => $json->entityname,
            'particulars' => $json->particulars,
            'classification' => $json->classification,
            'quantity' => $json->quantity,
            'arrival' => $json->arrival,
        ];
        $main = new InventoryModel();
        $rin = $main->save($data);
        return $this->respond($rin, 200);
    }

    public function delInventory(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        $main = new InventoryModel();
        $ron = $main->delete($id);
        return $this->respond($ron, 200);
    }


}
