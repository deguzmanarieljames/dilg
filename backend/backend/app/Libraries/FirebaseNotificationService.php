<?php

namespace App\Libraries;

class FirebaseNotificationService
{
    public function __construct()
    {
        // Initialization, setup, or configuration if needed
    }

    public function sendNotification($notification)
    {
        // Replace 'YOUR_SERVER_KEY' with your Firebase server key
        $serverKey = 'APA91bGJkYZ654QZke2_3HUrfKGBrcCrkbI3tBdDLB4MOvus8Nuwj1bvAPkVyhPtmMYjgOfRdW7OgyjTfx3ZvWbxHfUgNCxljHcVhZUKD8uSn7FCqqcCpvshqehCytqsAWGUJnWvJKj1';

        // Firebase Cloud Messaging (FCM) endpoint
        $url = 'https://fcm.googleapis.com/fcm/send';

        // Construct the headers
        $headers = [
            'Authorization: key=' . $serverKey,
            'Content-Type: application/json'
        ];

        // Construct the notification payload
        $payload = [
            'notification' => $notification,
            'to' => '/topics/all' // You can target specific devices or topics
        ];

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

        // Execute cURL session
        $result = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Handle the result
        if ($result === FALSE) {
            return ['status' => 'error', 'message' => 'Failed to send notification'];
        } else {
            return ['status' => 'success', 'message' => 'Notification sent successfully'];
        }
    }
}
