<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SigninModel;

class SigninController extends ResourceController
{
    public function index()
    {
        //
    }

    /*public function signin()
    {
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");
        $sin = new SigninModel();
        $data  = $sin->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $authenticatedPassword = password_verify($password, $pass);
            if($authenticatedPassword){
                return $this->respond(['msg' => 'okay'], 200);
            }else{
                return $this->respond(['msg' => 'invalid password'], 200);
            }
        }else{
            return $this->respond(['msg' => 'no user found'], 200);
        }
    }*/

    public function signin() 
    { 
      $user = new SigninModel(); 
      $username = $this->request->getVar('username'); 
       $password = $this->request->getVar('password'); 
       $data = $user->where('username', $username)->first(); 

       if($data){ 
         $pass = $data['password']; 
         $authenticatePassword = password_verify($password, $pass); 
         if($authenticatePassword){ 
           return $this->respond(['msg' => 'okay'], 200); 
         }else{ 
           return $this->respond(['msg' => 'error'], 200); 
         } 
       }else{
            return $this->respond(['msg' => 'no user found'], 200); 
       }
    } 
}
