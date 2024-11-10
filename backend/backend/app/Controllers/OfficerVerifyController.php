<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\OfficerModel;
use App\Models\InventoryModel;
use Mpdf\Mpdf;

class OfficerVerifyController extends ResourceController
{
    public function index()
    {
        //
    }


    public function getOfficerVerifyPPE()
    {
        // Load necessary models
        $officerPPEModel = new OfficerModel();
        $inventoryPPEModel = new InventoryModel();



        // Perform the join query
        $data = $officerPPEModel->select('officerverifyppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription')
                                ->join('inventoryppe', 'inventoryppe.particulars = officerverifyppe.particulars', 'left')
                                ->orderBy('officerverifyppe.id', 'DESC')
                                ->findAll();
                                foreach ($data as &$item) {
                                    $item['imageverification'] = 'https://inventrack.online/backend/uploads/' . $item['imageverification'];
                                }

        // Return the merged data
        return $this->respond($data, 200);
        }

        public function updateVerification($selectedRecord)
        {
            // Load the model
            $model = new OfficerModel();
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

        public function generatePDF($recordId)
        {
            $officerPPEModel = new OfficerModel();
            $inventoryPPEModel = new InventoryModel();
            
            // Perform a join operation to fetch data from both models
            $data = $officerPPEModel->select('officerverifyppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription')
                                    ->join('inventoryppe', 'inventoryppe.particulars = officerverifyppe.particulars', 'left')
                                    ->where('officerverifyppe.id', $recordId)
                                    ->first();

            // $record = $data->find($recordId);
        
            if ($data) {
                // Load the MPDF library
                $mpdf = new Mpdf();
        
                // Generate HTML content dynamically based on record data
                $htmlContent = view('pdf_template', ['data' => [$data]]); // Pass the record to the view
        
                // Write HTML content to PDF
                $mpdf->WriteHTML($htmlContent);

        
                // Output the PDF
                $mpdf->Output('generated_pdf.pdf', 'D'); // 'D' to force download
        
                exit(); // End script execution after downloading the PDF
            } else {
                // Handle the case where the record is not found
                die("Record with ID $recordId not found.");
            }
            // var_dump($data);
            // return view('pdf_template', ['data' => [$data]]);
        }

        public function recordsPDF()
        {
            $records = [];
            $officerPPEModel = new OfficerModel();
            $inventoryPPEModel = new InventoryModel();
        
            // Get all records
            $data = $officerPPEModel->select('officerverifyppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription')
                                    ->join('inventoryppe', 'inventoryppe.particulars = officerverifyppe.particulars', 'left')
                                    ->findAll();
        
            // Check if any records found
            if ($data) {
                // Load the MPDF library
                $mpdf = new \Mpdf\Mpdf();
        
                // Start the PDF document
                $mpdf->WriteHTML('<h1>Records Details</h1>');
        
                foreach ($data as $record) {
                    // Add each record to the array
                    $records[] = $record;
                }
                $htmlContent = view('pdf_template', ['data' => $records]);
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

        public function employeeRecordsPDF()
        {
            // Get the selected employee name from the request
            $requestData = $this->request->getJSON();
            $selectedEmployee = $requestData->employee;

            $records = [];
            $officerPPEModel = new OfficerModel();
            $inventoryPPEModel = new InventoryModel();

            // Get records for the selected employee
            $data = $officerPPEModel->select('officerverifyppe.*, inventoryppe.entityname, inventoryppe.classification, inventoryppe.code, inventoryppe.article, inventoryppe.modelno, inventoryppe.serialno, inventoryppe.fulldescription')
                                    ->join('inventoryppe', 'inventoryppe.particulars = officerverifyppe.particulars', 'left')
                                    ->where('officerverifyppe.empfullname', $selectedEmployee)
                                    ->findAll();

            // Check if any records found
            if ($data) {
                // Load the MPDF library
                $mpdf = new \Mpdf\Mpdf();

                // Start the PDF document
                $mpdf->WriteHTML('<h1>Records Details</h1>');

                foreach ($data as $record) {
                    // Add each record to the array
                    $records[] = $record;
                }
                $htmlContent = view('pdf_template', ['data' => $records]);
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

        
        

}
