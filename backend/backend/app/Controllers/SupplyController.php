<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SupplyModel;
use App\Models\SigninModel;
use App\Models\EmployeeSuppliesModel;

class SupplyController extends ResourceController
{
    public function index()
    {
        //
    }



    // public function predictSupplyUsage($itemCode) {
    //     $model = new EmployeeSuppliesModel();
    //     $monthlyData = $model->getMonthlyIssueQuantity($itemCode);

    //     // Call Python script with monthly data
    //     $command = 'py predict_usage.py ' . escapeshellarg(json_encode($monthlyData));
    //     $output = shell_exec($command);
        
    //     // // // Decode the Python script output
    //     $prediction = json_decode($output, true);

    //     return $this->response->setJSON($command);


    // }
    public function predictSupplyUsage()
    {
        $model = new EmployeeSuppliesModel();
    
        // Get all distinct item codes
        $distinctItemCodes = $this->getDistinctEmployeeSupplies();
    
        // Prepare to hold predictions for each item code
        $predictions = [];
    
        foreach ($distinctItemCodes as $item) {
            $itemCode = $item['item_code']; // Extract the item code
    
            $monthlyData = $model->getMonthlyIssueQuantity($itemCode);
            
            // Prepare data for ARIMA model
            $data = [];
            foreach ($monthlyData as $row) {
                $data[$row['month']] = (int)$row['total_issued']; // Ensure it's an integer
            }
            
            // Simulate predictions
            $predictions[$itemCode] = $this->simulateForecast($data);
        }
    
        return $this->response->setJSON($predictions);
    }
    
    
    

    private function simulateForecast($data)
    {
        // This function simulates data, replace with actual ARIMA forecasting
        $forecast = [];
        $currentMonth = end(array_keys($data)); // Get the last month
        for ($i = 1; $i <= 3; $i++) {
            $newMonth = date('Y-m', strtotime("+$i month", strtotime($currentMonth)));
            $forecast[] = [
                'month' => $newMonth,
                'predicted_issue' => rand(40, 50) // Simulated prediction
            ];
        }
        return $forecast;
    }
    

    public function getDistinctEmployeeSupplies()
    {
        $employeesup = new EmployeeSuppliesModel();
        
        // Use getResultArray() to return an array of arrays
        $data = $employeesup->select('item_code')->distinct()
            ->findAll();
    
        // Return the distinct item codes as an array of arrays
        return array_map(function($item) {
            return ['item_code' => $item['item_code']];
        }, $data);
    }
    


    
    












    public function getSupplies()
    {
        $main = new SupplyModel();
        $data = $main->orderBy('id', 'DESC') // Order by created_at column in descending order
                    ->findAll();

        return $this->respond($data, 200);
    }

    public function getEmployees()
    {
      $employees = new SigninModel();
      $data = $employees->where('usertype', 'user')->findAll();
      return $this->respond($data, 200);
    }

    public function getEmployeeSupplies()
    {
        $employeesup = new EmployeeSuppliesModel();

        $data = $employeesup
            ->select('employeesupplies.id, employeesupplies.item_code, employeesupplies.fullname, employeesupplies.issue_quantity, employeesupplies.no_days,  employeesupplies.status, employeesupplies.issued_date,  employeesupplies.end_date, databasesupplies.image, databasesupplies.item, databasesupplies.description')
            ->join('databasesupplies', 'databasesupplies.item_code = employeesupplies.item_code')
            ->findAll();

            foreach ($data as &$item) {
                $item['image'] = 'https://inventrack.online/backend/uploads/' . $item['image'];
            }
    
        return $this->respond($data, 200);
    }

    public function getEmployeeSuppliesByFullname($fullname)
    {
        $employeesup = new EmployeeSuppliesModel();

        // Perform join to get additional fields from `databasesupplies`
        $data = $employeesup
            ->select('employeesupplies.id, employeesupplies.item_code, employeesupplies.fullname, employeesupplies.issue_quantity, employeesupplies.no_days, employeesupplies.status, employeesupplies.issued_date,  employeesupplies.end_date, databasesupplies.image, databasesupplies.item, databasesupplies.description')
            ->join('databasesupplies', 'databasesupplies.item_code = employeesupplies.item_code')
            ->where('employeesupplies.fullname', $fullname) // Filter by fullname
            ->findAll();

            foreach ($data as &$item) {
                $item['image'] = 'https://inventrack.online/backend/uploads/' . $item['image'];
            }

        return $this->respond($data, 200);
    }

    

    public function issueSupply()
    {
        $supplyModel = new SupplyModel();
        $employeeSupplyModel = new EmployeeSuppliesModel();

        // Receive input from the request
        $itemCode = $this->request->getPost('item_code');
        $employeeName = $this->request->getPost('fullname');
        $issueQuantity = (int)$this->request->getPost('issue_quantity');

        // Fetch supply data
        $supply = $supplyModel->where('item_code', $itemCode)->first();
        if (!$supply || $supply['bal_quantity'] < $issueQuantity) {
            return $this->respond(['error' => 'Insufficient balance quantity or supply not found'], 400);
        }

        // Calculate new quantities
        $newIssueQuantity = $supply['issue_quantity'] + $issueQuantity;
        $newBalQuantity = $supply['bal_quantity'] - $issueQuantity;
        $no_days = $supply['no_days'];

        // Update `databasesupplies` table
        $supplyModel->update($supply['id'], [
            'issue_quantity' => $newIssueQuantity,
            'bal_quantity' => $newBalQuantity,
            'issue_totalcost' => $newIssueQuantity * $supply['issue_unitcost'], // update issue_totalcost
            'bal_totalcost' => $newBalQuantity * $supply['bal_unitcost'] // update bal_totalcost
        ]);

        // Insert into `employeesupplies` table
        $employeeSupplyModel->insert([
            'item_code' => $itemCode,
            'fullname' => $employeeName,
            'issue_quantity' => $issueQuantity,
            'no_days' => $no_days
        ]);

        return $this->respond(['success' => 'Supply issued successfully'], 200);
    }











    public function saveSupplies()
    {
        $main = new SupplyModel();
        $image = $this->request->getFile('image');
        $newName = null;
    
        // Check if an image was uploaded and save it
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . '../uploads', $newName);
        }
    
        // Get data from the request
        $data = [
            'date' => $this->request->getPost('date'),
            'supplier' => $this->request->getPost('supplier'),
            'item' => $this->request->getPost('item'),
            'description' => $this->request->getPost('description'),
            'unit_measurement' => $this->request->getPost('unit_measurement'),
            'item_code' => $this->request->getPost('item_code'),
            'rec_quantity' => $this->request->getPost('rec_quantity'),
            'rec_unitcost' => $this->request->getPost('rec_unitcost'),
            'rec_totalcost' => $this->request->getPost('rec_totalcost'),
            'no_days' => $this->request->getPost('no_days'),
            'image' => $newName, // Store the image filename if uploaded
        ];
    
        // Save the data in the model
        if ($main->save($data)) {
            // Respond with success
            return $this->respond(['status' => 'success', 'message' => 'Record saved successfully'], 200);
        } else {
            // Respond with an error if saving fails
            return $this->failServerError('Failed to save record');
        }
    }
    

    public function updateSupplies($statusId)
    {
        // Load the model
        $model = new SupplyModel();
        $id = $statusId;
        // if ($this->request->getFile('image')->isValid() && $existingImage) {
        //     $uploadsPath = ROOTPATH . '../uploads/'; 
        //     unlink($uploadsPath . $existingImage);
        // }
        // Retrieve data from the request
        $data = [
            'date' => $this->request->getPost('date'),
            'supplier' => $this->request->getPost('supplier'),
            'item' => $this->request->getPost('item'),
            'description' => $this->request->getPost('description'),
            'unit_measurement' => $this->request->getPost('unit_measurement'),
            'item_code' => $this->request->getPost('item_code'),
            'rec_quantity' => $this->request->getPost('rec_quantity'),
            'rec_unitcost' => $this->request->getPost('rec_unitcost'),
            'rec_totalcost' => $this->request->getPost('rec_totalcost'),
            // 'issue_quantity' => $this->request->getPost('issue_quantity'),
            // 'issue_unitcost' => $this->request->getPost('issue_unitcost'),
            // 'issue_totalcost' => $this->request->getPost('issue_totalcost'),
            // 'bal_quantity' => $this->request->getPost('bal_quantity'),
            // 'bal_unitcost' => $this->request->getPost('bal_unitcost'),
            // 'bal_totalcost' => $this->request->getPost('bal_totalcost'),
            'no_days' => $this->request->getPost('no_days'),
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

    public function delSupplies(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        
        // Retrieve the image file name associated with the record
        $main = new SupplyModel();
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


    public function delEmployeeSupplies(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        
        // Retrieve the image file name associated with the record
        $main = new EmployeeSuppliesModel();
        $record = $main->find($id);
        
        // Delete the record
        $ron = $main->delete($id);
        
    }
    
}
