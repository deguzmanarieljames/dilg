<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SigninModel;
use App\Models\VerifyModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SigninController extends ResourceController
{
    public function index()
    {
        //
    }

    protected $SigninModel; // Declare the model property

    public function __construct()
    {
        $this->SigninModel = new \App\Models\SigninModel(); // Load the model
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
      $fullname = $this->request->getVar('fullname');
      $position = $this->request->getVar('position');
      $usertpye = $this->request->getVar('usertype');
      $password = $this->request->getVar('password'); 
      $status = $this->request->getVar('status');
      $verify = $this->request->getVar('verify');
      $data = $user->where('username', $username)->first();

      if($data){
        $pass = $data['password']; 
        $authenticatePassword = password_verify($password, $pass); 
        if($authenticatePassword){ 
          return $this->respond(['msg' => 'okay', 'token' => $data['token'], 'fullname' => $data['fullname'], 'position' => $data['position'], 'usertype' => $data['usertype'], 'status' => $data['status'], 'verify' => $data['verify']]);
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
        'fullname' => $this->request->getVar('fullname'),
        'position' => $this->request->getVar('position'),
        'email' => $this->request->getVar('email'),
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

    public function getVerify()
    {
      $verify = new VerifyModel();
      $data = $verify->findAll();
      return $this->respond($data, 200);
    }
    
    public function updateStatus()
    {
        $requestData = $this->request->getJSON();
        $id = $requestData->id;
        $newStatus = $requestData->status; // Added this line to get the new status

        $allowedStatuses = ['Declined', 'Approved']; // Define allowed statuses

        if (!in_array($newStatus, $allowedStatuses)) {
            return $this->respond(['error' => 'Invalid status'], 400);
        }

        $verifyModel = new VerifyModel();
        $verifyModel->update($id, ['status' => $newStatus]);

        return $this->respond(['message' => 'Status updated successfully'], 200);
    }
    
    public function sendVerificationEmail()
    {
        $email = $this->request->getVar('email');
        $token = $this->request->getVar('token');
    
        $mail = new PHPMailer(true);
    
        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set to DEBUG_SERVER for more verbose logging
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';  // Specify your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'arieljamesdeguzman321@gmail.com';  // SMTP username
            $mail->Password   = 'iapz oyen tsar eedr';  // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS, set to PHPMailer::ENCRYPTION_SMTPS if using SSL
            $mail->Port       = 587;  // TCP port to connect to
    
            // Recipients
            $mail->setFrom('arieljamesdeguzman321@gmail.com', 'DILGence');
            $mail->addAddress($email);
    
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Account Verification';
            $mail->Body    = "Click the following link to verify your account: " . base_url("verify-account?token=$token");
    
            // Send the email
            $mail->send();
    
            return $this->respond(['msg' => 'emailSent']);
          } catch (\Exception $e) {
            // Log or handle the exception
            return $this->respond(['msg' => 'emailFailed', 'error' => $e->getMessage()]);
        }
    }

    public function updateVerifyColumn($token)
    {
        $user = $this->db->table('users')->where('verification_token', $token)->get()->getRowArray();

        if ($user) {
            // Assuming you have a 'verify' column in your 'users' table
            $data = ['verify' => 'Successful'];
            $this->db->table('users')->where('id', $user['id'])->update($data);
            return true;
        } else {
            return false;
        }
    }

    public function verifyAccount()
    {
        $token = $this->request->getVar('token');

        // Verify the token and update the 'verify' column
        $result = $this->SigninModel->updateVerifyColumn($token);

        if ($result) {
            return redirect()->to('signin')->with('success', 'Account verified successfully. You can now sign in.');
        } else {
            return redirect()->to('signin')->with('error', 'Failed to verify account. Please try again.');
        }
    }
}
