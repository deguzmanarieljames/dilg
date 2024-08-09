<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;
use App\Models\InventoryModel;
use App\Models\SigninModel;
use App\Models\EmployeeModel;

class ServiceController extends ResourceController
{
    public function index()
    {
        //
    }

    public function users($id = null)
    {
        $user = new SigninModel();
        $data = $user->where('token', $id)->first();
        return $this->respond($data, 200);
        // var_dump($data);
    }

    // public function getData()
    // {
    //     $main = new DatabasePPEModel();
    //     $data = $main->findAll();
    //     return $this->respond($data, 200);
    // }

    // public function getDataUser()
    // {
    //     $main = new DatabasePPEModel();
        
    //     // Retrieve user data to get the fullname
    //     $id = $this->request->getVar('id');
    //     $user = new SigninModel();
    //     $userData = $user->where('fullname', $id)->first();
        
    //     if ($userData) {
    //         $fullname = $userData['fullname'];
    //         $data = $main->where('empfullname', $fullname)->findAll();
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->respond(['error' => 'User not found' , 'fullname' => $id], 404);
    //     }
    // }

    public function getDataUser()
    {
        $main = new DatabasePPEModel();
        
        // Retrieve user data to get the fullname
        $id = $this->request->getVar('id');
        $user = new SigninModel();
        $userData = $user->where('fullname', $id)->first();
        
        if ($userData) {
            $fullname = $userData['fullname'];
            
            // Perform the join query
            $data = $main->select('databaseppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription, inventoryppe.image')
                         ->join('inventoryppe', 'inventoryppe.particulars = databaseppe.particulars', 'left')
                         ->where('databaseppe.acc_officer', $fullname)
                         ->orderBy('databaseppe.id', 'DESC')
                         ->findAll();
    
            // Manipulate image URLs
            foreach ($data as &$item) {
                $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
            }
            
            return $this->respond($data, 200);
        } else {
            return $this->respond(['error' => 'User not found', 'fullname' => $id], 404);
        }
    }
    


    public function getDataServiceable()
    {
        $main = new DatabasePPEModel();
        $data = $main->where('status', 'Serviceable')->findAll();
        return $this->respond($data, 200);
    }


    public function getDataUnserviceable()
    {
        $main = new DatabasePPEModel();
        $data = $main->where('status', 'Unserviceable')->findAll();
        return $this->respond($data, 200);
    }

    // public function getUserDataServiceable()
    // {

    //     $main = new DatabasePPEModel();
        
    //     // Retrieve user data to get the fullname
    //     $id = $this->request->getVar('id');
    //     $user = new SigninModel();
    //     $userData = $user->where('fullname', $id)->first();
        
    //     if ($userData) {
    //         $fullname = $userData['fullname'];
    //         $data = $main->where('status', 'Serviceable')->findAll();
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->respond(['error' => 'User not found' , 'fullname' => $id], 404);
    //     }
    // }

    public function getUserDataServiceable()
    {
        // Retrieve user data to get the fullname
        $id = $this->request->getVar('id');
        $user = new SigninModel();
        $userData = $user->where('fullname', $id)->first();
        
        if ($userData) {
            $fullname = $userData['fullname'];
            
            $main = new DatabasePPEModel();
            
            // Perform the join query
            $data = $main->select('databaseppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription, inventoryppe.image')
                        ->join('inventoryppe', 'inventoryppe.particulars = databaseppe.particulars', 'left')
                        ->where('databaseppe.empfullname', $fullname)
                        ->where('databaseppe.status', 'Serviceable')
                        ->orderBy('databaseppe.id', 'DESC')
                        ->findAll();

            // Manipulate image URLs
            foreach ($data as &$item) {
                $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
            }
            
            return $this->respond($data, 200);
        } else {
            return $this->respond(['error' => 'User not found', 'fullname' => $id], 404);
        }
    }



    public function getUserDataUnserviceable()
    {
        {
            // Retrieve user data to get the fullname
            $id = $this->request->getVar('id');
            $user = new SigninModel();
            $userData = $user->where('fullname', $id)->first();
            
            if ($userData) {
                $fullname = $userData['fullname'];
                
                $main = new DatabasePPEModel();
                
                // Perform the join query
                $data = $main->select('databaseppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription, inventoryppe.image')
                            ->join('inventoryppe', 'inventoryppe.particulars = databaseppe.particulars', 'left')
                            ->where('databaseppe.empfullname', $fullname)
                            ->where('databaseppe.status', 'Unserviceable')
                            ->orderBy('databaseppe.id', 'DESC')
                            ->findAll();
    
                // Manipulate image URLs
                foreach ($data as &$item) {
                    $item['image'] = 'http://dilg.test/backend/uploads/' . $item['image'];
                }
                
                return $this->respond($data, 200);
            } else {
                return $this->respond(['error' => 'User not found', 'fullname' => $id], 404);
            }
        }
    }



    //-------------------- PDF GENERATION ------------------------

    public function serviceablePDF() {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->where('remarks', 'Serviceable')->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'format' => 'Legal']);
    
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }
    
            $htmlContent = view('IIRUSP', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Output the PDF with a unique filename
            $filename = 'generated_pdf_all.pdf';
            $mpdf->Output($filename, 'D'); // 'D' to force download
        
            // End script execution after downloading the PDF
            exit();
        } else {
            // Handle the case where no records found
            die("No records found.");
        }
    }

    public function unserviceablePDF() {
        $records = [];
        $databaseppemodel = new DatabasePPEModel();
        
        // Get all records
        $data = $databaseppemodel->where('remarks', 'Unserviceable')->findAll();
        
        // Check if any records found
        if ($data) {
            // Load the MPDF library
            $mpdf = new \Mpdf\Mpdf(['orientation' => 'L', 'format' => 'Legal']);
    
        
            foreach ($data as $record) {
                // Add each record to the array
                $records[] = $record;
            }
    
            $htmlContent = view('IIRUSP', ['data' => $records]);
            $mpdf->WriteHTML($htmlContent);
            
            // Output the PDF with a unique filename
            $filename = 'generated_pdf_all.pdf';
            $mpdf->Output($filename, 'D'); // 'D' to force download
        
            // End script execution after downloading the PDF
            exit();
        } else {
            // Handle the case where no records found
            die("No records found.");
        }
    }


}
