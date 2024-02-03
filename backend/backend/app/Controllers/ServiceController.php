<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DatabasePPEModel;
use App\Models\SigninModel;

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

    public function getDataUser()
    {
        $main = new DatabasePPEModel();
        
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

    public function getUserDataServiceable()
    {
        $main = new DatabasePPEModel();
        $id = $this->request->getVar('id');
        $user = new SigninModel();
        $userData = $user->where('fullname', $id)->first();
        $data = $main->where('status', 'Serviceable')->findAll();
        return $this->respond($data, 200);
    }


    public function getUserDataUnserviceable()
    {
        $main = new DatabasePPEModel();
        $id = $this->request->getVar('id');
        $user = new SigninModel();
        $userData = $user->where('fullname', $id)->first();
        $data = $main->where('status', 'Unserviceable')->findAll();
        return $this->respond($data, 200);
    }


}
