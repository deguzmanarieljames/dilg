<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\NotificationController;
use CodeIgniter\RESTful\ResourceController;
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
    //   $fullname = $this->request->getVar('fullname');
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
          // Notify about the new user signup using the addNotification method

          $fullname = $data['fullname'];
          $icon = 'ri-user-received-fill';  // Set the icon you want to use here
      
          $notificationController = new NotificationController();
          $notificationController->addNotification("A user signed in: {$fullname}", $icon);
          
          return $this->respond(['msg' => 'okay', 'token' => $data['token'], 'fullname' => $data['fullname'], 'position' => $data['position'], 'usertype' => $data['usertype'], 'status' => $data['status'], 'verify' => $data['verify']]);
        }else{ 
          return $this->respond(['msg' => 'Incorrect Pasword']);
        } 
      }else{
          return $this->respond(['msg' => 'no user found']);
      }
    }

    // public function signup()
    // {
    //   $user = new SigninModel(); 
    //   $token = $this->verification(50);
    // //   $image = $this->request->getFile('image');
    // //   $newName = null;

    // //   // Check if an image was uploaded
    // //   if ($image->isValid() && !$image->hasMoved()) {
    // //       $newName = $image->getRandomName();
    // //       $image->move(ROOTPATH . '../uploads', $newName);
    // //   }

    //   $data = [ 
    //     'username' => $this->request->getVar('username'),
    //     'fullname' => $this->request->getVar('fullname'),
    //     'position' => $this->request->getVar('position'),
    //     'email' => $this->request->getVar('email'),
    //     // 'image' => $newName,
    //     'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT), 
    //     'token' => $token
    //   ]; 
    //   $u = $user->save($data); 
    //   if($u){ 
    //     return $this->respond(['msg' => 'okay', 'token' =>$token]); 
    //   }else{ 
    //     return $this->respond(['msg' => 'failed']); 
    //   } 
    // } 


    public function signup()
    {
        $image = $this->request->getFile('image');
        $user = new SigninModel(); 
        $token = $this->verification(50);
    
        // Check if an image was uploaded
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . '../uploads', $newName);
        }
    
        $data = [ 
            'username' => $this->request->getPost('username'),
            'fullname' => $this->request->getPost('fullname'),
            'position' => $this->request->getPost('position'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), 
            'token' => $token,
            'image' => isset($newName) ? $newName : null, // Store the image filename if uploaded
        ]; 
    
        $u = $user->save($data); 
    
        if ($u) { 
            // Notify about the new user signup using the addNotification method
            $notificationController = new NotificationController();
            $fullname = $this->request->getPost('fullname');
            $notificationController->addNotification("New user signed up: {$fullname}");
    
            return $this->respond(['msg' => 'okay', 'token' => $token]); 
        } else { 
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
      $verify = new SigninModel();
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

        $verifyModel = new SigninModel();
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
            $mail->Body    = "Click the following link to verify your account: " . ("http://dilg.test/backend/verify-account?token=$token");
    
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

    public function changePassword()
    {
        // Get the current user from request (POST body)
        $userId = $this->request->getJSON()->id; // Retrieving from JSON body
        $currentPassword = $this->request->getJSON()->currentPassword;
        $newPassword = $this->request->getJSON()->newPassword;
    
        // Fetch user data from the database
        $userModel = new SigninModel();
        $user = $userModel->where('id', $userId)->first();
    
        if (!$user) {
            return $this->respond(['error' => 'User not found'], 404);
        }
    
        // Verify current password
        if (!password_verify($currentPassword, $user['password'])) {
            return $this->respond(['error' => 'Current password is incorrect'], 400);
        }
    
        // Hash the new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    
        // Update the password in the database
        $userModel->update($userId, ['password' => $hashedPassword]);
    
        return $this->respond(['msg' => 'passwordChanged'], 200);
    }
    


    public function verifyPassword()
    {
        $user = new SigninModel();
        $token = $this->request->getVar('token');
        $password = $this->request->getVar('password');
        
        // Find the user based on the token
        $data = $user->where('token', $token)->first();
    
        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            
            if ($authenticatePassword) {
                return $this->respond(['msg' => 'Password verified']);
            } else {
                return $this->respond(['msg' => 'Incorrect Password']);
            }
        } else {
            return $this->respond(['msg' => 'User not found']);
        }
    }    

    

}
