<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use App\Models\NotificationModel;

class NotificationController extends ResourceController
{
    public function addNotification($message, $icon)
    {
        $model = new NotificationModel();
        $data = [
            'message' => $message,
            'icon' => $icon,  // Save the icon here
            'created_at' => date('Y-m-d H:i:s'),
            'status' => 'unread'
        ];
    
        $model->save($data);
    }

    public function getNotification()
    {
        $main = new NotificationModel();
        $data = $main->orderBy('id', 'DESC')->findAll();

        return $this->respond($data, 200);
    }

    public function markAsRead($id)
    {
        $notificationModel = new NotificationModel();
    
        // Find the notification by ID
        $notification = $notificationModel->find($id);
        
        if (!$notification) {
            return $this->response->setJSON(['msg' => 'Notification not found'], 404);
        }
    
        // Update the notification status
        $updated = $notificationModel->update($id, ['status' => 'read']);
        
        if ($updated) {
            return $this->response->setJSON(['msg' => 'Notification marked as read']);
        } else {
            return $this->response->setJSON(['msg' => 'Failed to mark notification as read'], 500);
        }
    }

    public function markAllAsRead()
    {
        $notificationModel = new NotificationModel();

        try {
            // Update all notifications to "read" status
            $updated = $notificationModel->where('status', 'unread')
                                        ->set(['status' => 'read'])
                                        ->update();

            if ($updated) {
                return $this->response->setJSON(['msg' => 'All notifications marked as read']);
            } else {
                return $this->response->setJSON(['msg' => 'No notifications to update'], 200);
            }
        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)
                                ->setJSON(['msg' => 'Failed to mark all notifications as read', 'error' => $e->getMessage()]);
        }
    }



    public function addNotificationEmp($message, $icon)
    {
        $model = new NotificationModel();
        $data = [
            'message' => $message,
            'icon' => $icon,  // Save the icon here
            'created_at' => date('Y-m-d H:i:s'),
            'status' => 'unread'
        ];
    
        $model->save($data);
    }

    public function getNotificationEmp()
    {
        $main = new NotificationModel();
        $data = $main->orderBy('id', 'DESC')->findAll();

        return $this->respond($data, 200);
    }

    public function markAsReadEmp($id)
    {
        $notificationModel = new NotificationModel();
    
        // Find the notification by ID
        $notification = $notificationModel->find($id);
        
        if (!$notification) {
            return $this->response->setJSON(['msg' => 'Notification not found'], 404);
        }
    
        // Update the notification status
        $updated = $notificationModel->update($id, ['status' => 'read']);
        
        if ($updated) {
            return $this->response->setJSON(['msg' => 'Notification marked as read']);
        } else {
            return $this->response->setJSON(['msg' => 'Failed to mark notification as read'], 500);
        }
    }
    
    
    

}
