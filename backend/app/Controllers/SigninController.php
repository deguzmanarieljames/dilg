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
      $usertpye = $this->request->getVar('usertype');
      $password = $this->request->getVar('password'); 
      $data = $user->where('username', $username)->first();

       if($data){
         $pass = $data['password']; 
         $authenticatePassword = password_verify($password, $pass); 
         if($authenticatePassword){ 
           return $this->respond(['msg' => 'okay', 'token,' => $data['token'], 'usertype' => $data['usertype']]); 
         }else{ 
           return $this->respond(['msg' => 'Incorrect Pasword']); 
         } 
       }else{
            return $this->respond(['msg' => 'no user found']); 
       }
    }

    public function signup()
    {
      $user = new SigninModel(); 
      $token = $this->verification(50); 
      $data = [ 
        'username' => $this->request->getVar('username'),
        'email' => $this->request->getVar('email'),
        'usertype' => $this->request->getVar('usertype'),
        'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT), 
        'token' => $token
      ]; 
      $u = $user->save($data); 
      if($u){ 
        return $this->respond(['msg' => 'okay', 'token' =>$token]); 
      }else{ 
        return $this->respond(['msg' => 'failed']); 
      } 
    } 
    public function verification($length){ 
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
        return substr(str_shuffle($str_result), 
        0, $length); 
      } 
}
