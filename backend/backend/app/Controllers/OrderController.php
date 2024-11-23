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
        $data = [];

        $file = $this->request->getFile('file');
        if ($file && $file->isValid()) {
            $existingRecord = $model->find($id);
            $existingFile = $existingRecord['receipt'];
            
            // Delete existing file if it exists
            $uploadsPath = ROOTPATH . '../uploads/';
            $pdfPath = ROOTPATH . '../pdfFiles/';
            if ($existingFile) {
                if (file_exists($uploadsPath . $existingFile)) {
                    unlink($uploadsPath . $existingFile);
                } elseif (file_exists($pdfPath . $existingFile)) {
                    unlink($pdfPath . $existingFile);
                }
            }
            
            $newName = $file->getRandomName();
            if ($file->getClientMimeType() === 'application/pdf') {
                $file->move('./pdfFiles', $newName);
            } else {
                $file->move('./uploads', $newName);
            }
            
            $data['receipt'] = $newName;
        }

        if ($model->update($id, $data)) {
            return $this->respond(['status' => 'success', 'message' => 'File uploaded and record updated successfully']);
        } else {
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
    
    
        return $this->respond($data);
    }

    public function getOrderReceived()
    {
        $equipmentOrdered = new OrderModel();
        
        // Fetch orders where status is 'Ordered' and number_rating is not equal to 0
        $data = $equipmentOrdered->where('status', 'Ordered')
                                 ->where('number_rating !=', 0)
                                 ->findAll();
    
    
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
        $data = $model->select('article')->distinct()->findAll();
        return $this->response->setJSON($data);
    }
    
    public function getShopsByArticle()
    {
        $model = new ShopModel();
        $article = $this->request->getVar('article');
        $data = $model->where('article', $article)->orderBy('shop_rate', 'DESC')->findAll();
        return $this->response->setJSON($data);
    }

    public function delOrder(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        
        // Retrieve the image file name associated with the record
        $main = new OrderModel();
        $record = $main->find($id);
        $imageName = $record['receipt']; // Assuming 'image' is the column name storing the image file name
        
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



















    // PDF GENERATION

    public function generatePurchaseRequest($recordId)
    {
        // Ensure recordId is provided
        if (!$recordId) {
            die("Record ID is required.");
        }

        $databaseppemodel = new OrderModel();

        // Fetch the data based on the provided recordId
        $data = $databaseppemodel->where('id', $recordId)->first();

        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['orientation' => 'P', 'format' => 'A4']);

            // Generate HTML content dynamically based on record data
            $htmlContent = view('PurchaseRequest', ['data' => [$data]]); // Pass the record to the view

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
    
}
