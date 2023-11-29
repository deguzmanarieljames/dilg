<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RequestModel;

class RequestController extends BaseController
{
    public function index()
    {
        //
    }

    public function getReq()
    {
        $main = new RequestModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }

    public function send_request(){
        $json = $this->request->getJSON();
        $data = [
            'empfullname' => $json->empfullname,
            'particulars' => $json->particulars,
            'description' => $json->description,
        ];
        $main = new RequestModel();
        $rin = $main->save($data);
        return $this->respond($rin, 200);
    }
}
