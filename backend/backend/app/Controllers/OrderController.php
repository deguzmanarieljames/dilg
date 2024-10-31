<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\OrderModel;
use App\Models\ShopModel;
use App\Models\EmployeeModel;
use App\Models\InventoryModel;

class OrderController extends ResourceController
{
    public function index()
    {
        //
    }

    // public function saveOrder()
    // {
    //     $main = new OrderModel();
    
    //     $data = [
    //         'classification' => $this->request->getPost('classification'),
    //         'article' => $this->request->getPost('article'),
    //         'particular' => $this->request->getPost('particular'),
    //         'quantity' => $this->request->getPost('quantity'),
    //         'unit' => $this->request->getPost('unit'),
    //         'unitcost' => $this->request->getPost('unitcost'),
    //         'totalamount' => $this->request->getPost('totalamount'),
    //         'shop' => $this->request->getPost('shop'),
    //         'date_ordered' => $this->request->getPost('date_ordered'),
    //     ];
    
    //     $rin = $main->save($data);
    
    //     return $this->respond($rin, 200);
    //     // var_dump($data);
    // }

    // public function saveOrder()
    // {
    //     $json = $this->request->getJSON();
    
    //     // Proceed with saving to the database table without checking inventory status
    //     $data = [
    //         'classification' => $json->classification,
    //         'article' => $json->article,
    //         'particulars' => $json->particulars,
    //         'quantity' => $json->quantity,
    //         'unit' => $json->unit,
    //         'unitcost' => $json->unitcost,
    //         'totalamount' => $json->totalamount,
    //         'shop' => $json->shop,
    //         'date_ordered' => $json->date_ordered,
    //     ];
    
    //     $ordermodel = new OrderModel();
    //     $result = $ordermodel->save($data);
    
    //     return $this->respond($result, 200);
    // }

    public function saveOrder()
    {
        $main = new OrderModel();

        $data = [
            'classification' => $this->request->getPost('classification'),
            'article' => $this->request->getPost('article'),
            'particulars' => $this->request->getPost('particulars'),
            'quantity' => $this->request->getPost('quantity'),
            'unit' => $this->request->getPost('unit'),
            'unitcost' => $this->request->getPost('unitcost'),
            'totalamount' => $this->request->getPost('totalamount'),
            'shop' => $this->request->getPost('shop'),
            'date_ordered' => $this->request->getPost('date_ordered'),
        ];

        $rin = $main->save($data);
        return $this->respond($rin, 200);
    }

    public function updateReceipt($selectedRecord)
    {
        // Load the model
        $model = new OrderModel();
        $id = $selectedRecord;

        $existingRecord = $model->find($id);
        $existingImage = $existingRecord['receipt'];

        if($existingImage) {
            $uploadsPath = ROOTPATH . '../uploads/'; 
            unlink($uploadsPath . $existingImage);
        }



        // Check if an image is uploaded
        if ($this->request->getFile('receipt') && $this->request->getFile('receipt')->isValid()) {
            // $uploadsPath = ROOTPATH . '../uploads/'; 
            // unlink($uploadsPath . $existingImage);
            $image = $this->request->getFile('receipt');
            $newName = $image->getRandomName();
            $image->move('./uploads', $newName);
            $data['receipt'] = $newName; // Update the image field with the new image name
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

    public function updateRating($id, $number_rating)
    {
        $orderModel = new OrderModel();
        $rateid = $id;
        $getrating = $number_rating;
        $result = $orderModel->update($rateid, ['number_rating' => $getrating]);

        if ($result) {
            return $this->respond(['status' => 'success', 'message' => 'Record updated successfully', 'data' => $getrating]);
        } else {
            // Handle the case where the update fails
            return $this->respond(['status' => 'error', 'message' => 'Failed to update record'], 500);
        }
    }
    
    public function getOrder()
    {
        $equipmentOrdered = new OrderModel();
        
        // Fetch orders where number_rating is not equal to 0
        $data = $equipmentOrdered->where('number_rating', 0)->findAll();
    
        // Update receipt URL
        foreach ($data as &$item) {
            $item['receipt'] = 'https://inventrack.online/backend/uploads/' . $item['receipt'];
        }
    
        return $this->respond($data);
    }
    

    public function getShop(){
        $fetchshop = new ShopModel();
        $data = $fetchshop->orderBy('shop_rate', 'DESC')->findAll();
        return $this->respond($data);
    }
    public function getArticles()
    {
        $model = new ShopModel();
        $query = $this->request->getVar('query');
        $data = $model->like('article', $query)->findAll();
        return $this->response->setJSON($data);
    }
    public function getShopsByArticle()
    {
        $model = new ShopModel();
        $article = $this->request->getVar('article');
        $data = $model->where('article', $article)->orderBy('shop_rate', 'DESC')->findAll();
        return $this->response->setJSON($data);
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
