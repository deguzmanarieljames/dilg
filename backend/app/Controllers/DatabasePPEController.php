<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;
use App\Models\InventoryModel;

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

    public function save()
    {
        $json = $this->request->getJSON();
        $data = [
            'entityname' => $json->entityname,
            'particulars' => $json->particulars,
            'classification' => $json->classification,
            'empfullname' => $json->empfullname,
            'code' => $json->code,
        ];
        $main = new DatabasePPEModel();
        $rin = $main->save($data);
        return $this->respond($rin, 200);
    }

    public function del(){
        $json = $this->request->getJSON();  
        $id = $json->id;
        $main = new DatabasePPEModel();
        $ron = $main->delete($id);
        return $this->respond($ron, 200);
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
            'code' => $json->code,
            'quantity' => $json->quantity,
            'arrival' => $json->arrival,
            'status' => $json->status,
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
