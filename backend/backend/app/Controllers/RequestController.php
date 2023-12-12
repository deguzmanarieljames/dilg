<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RequestModel;
use App\Models\SigninModel;

class RequestController extends ResourceController
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

    // public function getuser($id)
    // {
    //     $user = $this->users($id);
    //     $RequestModel = new RequestModel();
    //     $userData =[
    //         'info' => $RequestModel->select('empfullname, particulars, description')->find($user)
    //     ];
    //     if(!$userData)
    //     {
    //         return $this->FailNotFound('User Not Found');
    //     }
    //     return $this->respond($userData, 200);

    // }

    // public function getReq()
    // {
    //     $main = new RequestModel();
    //     $data = $main->findAll();
    //     return $this->respond($data, 200);
    // }

    public function getReq()
    {
        $main = new RequestModel();
        
        // Retrieve user data to get the fullname
        $id = $this->request->getVar('id');
        $user = new SigninModel();
        $userData = $user->where('fullname', $id)->first();
        
        if ($userData) {
            $fullname = $userData['fullname'];
            $data = $main->where('empfullname', $fullname)->findAll();
            return $this->respond($data, 200);
        } else {
            return $this->respond(['error' => 'User not found' , 'fullname' => $id], 404);
        }
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
