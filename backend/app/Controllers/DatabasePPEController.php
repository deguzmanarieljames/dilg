<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;

class DatabasePPEController extends ResourceController
{
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
}
