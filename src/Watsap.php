<?php

namespace Watsap;

class Watsap
{
    public function sendMessage($data)
    {
        $url   = 'https://wa.srv26.wapanels.com/send-message'; // URL API

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['sender']) || $data['sender'] == null || $data['sender'] == "") {
            return ['success' => false, 'error' => 'Sender wajib diisi'];
        }

        if (!isset($data['number']) || $data['number'] == null || $data['number'] == "") {
            return ['success' => false, 'error' => 'Number wajib diisi'];
        }

        if (!isset($data['message']) || $data['message'] == null || $data['message'] == "") {
            return ['success' => false, 'error' => 'Message wajib diisi'];
        }

        $data = [
            'sender' => $data['sender'],
            'api_key' => $data['api_key'],
            'number'   => $data['number'],
            'message'   => $data['message']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function sendMedia($data)
    {
        $url   = 'https://wa.srv26.wapanels.com/send-media'; // URL API

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['sender']) || $data['sender'] == null || $data['sender'] == "") {
            return ['success' => false, 'error' => 'Sender wajib diisi'];
        }

        if (!isset($data['number']) || $data['number'] == null || $data['number'] == "") {
            return ['success' => false, 'error' => 'Number wajib diisi'];
        }

        if (!isset($data['media_type']) || $data['media_type'] == null || $data['media_type'] == "") {
            return ['success' => false, 'error' => 'Media type wajib diisi'];
        }

        if (!isset($data['media_url']) || $data['media_url'] == null || $data['media_url'] == "") {
            return ['success' => false, 'error' => 'Media url wajib diisi'];
        }

        $data = [
            'api_key' => $data['api_key'],
            'sender' => $data['sender'],
            'number' => $data['number'],
            'media_type' => $data['type'],
            'caption' => $data['caption'] ?? "",
            'url' => $data['media_url']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function sendButton($data)
    {
        $url   = 'https://wa.srv26.wapanels.com/send-button'; // URL API

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['sender']) || $data['sender'] == null || $data['sender'] == "") {
            return ['success' => false, 'error' => 'Sender wajib diisi'];
        }

        if (!isset($data['number']) || $data['number'] == null || $data['number'] == "") {
            return ['success' => false, 'error' => 'Number wajib diisi'];
        }

        if (!isset($data['message']) || $data['message'] == null || $data['message'] == "") {
            return ['success' => false, 'error' => 'Message wajib diisi'];
        }

        if (!isset($data['button']) || $data['button'] == null || $data['button'] == "" || empty($data['button'])) {
            return ['success' => false, 'error' => 'Button wajib diisi'];
        }

        $data = [
            'api_key' => $data['api_key'],
            'sender' => $data['sender'],
            'number' => $data['number'],
            'footer' => $data['footer'] ?? "",
            'message' => $data['message'],
            'url' => $data['media_url'] ?? "",
            'button' => $data
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function sendTemplateButton($data)
    {
        $url   = 'https://wa.srv26.wapanels.com/send-template'; // URL API

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['sender']) || $data['sender'] == null || $data['sender'] == "") {
            return ['success' => false, 'error' => 'Sender wajib diisi'];
        }

        if (!isset($data['number']) || $data['number'] == null || $data['number'] == "") {
            return ['success' => false, 'error' => 'Number wajib diisi'];
        }

        if (!isset($data['message']) || $data['message'] == null || $data['message'] == "") {
            return ['success' => false, 'error' => 'Message wajib diisi'];
        }

        if (!isset($data['template']) || $data['template'] == null || $data['template'] == "" || empty($data['template'])) {
            return ['success' => false, 'error' => 'Template wajib diisi'];
        }

        $data = [
            'api_key' => $data['api_key'],
            'sender' => $data['sender'],
            'number' => $data['no_hp'],
            'footer' => $data['footer'],
            'message' => $data['message'],
            'url' => $data['media_url'],
            'template' => $data['template']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function sendList($data)
    {
        $url   = 'https://wa.srv26.wapanels.com/send-LIST'; // URL API

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['sender']) || $data['sender'] == null || $data['sender'] == "") {
            return ['success' => false, 'error' => 'Sender wajib diisi'];
        }

        if (!isset($data['number']) || $data['number'] == null || $data['number'] == "") {
            return ['success' => false, 'error' => 'Number wajib diisi'];
        }

        if (!isset($data['list_name']) || $data['list_name'] == null || $data['list_name'] == "") {
            return ['success' => false, 'error' => 'List Name wajib diisi'];
        }

        if (!isset($data['title']) || $data['title'] == null || $data['title'] == "") {
            return ['success' => false, 'error' => 'Title wajib diisi'];
        }

        if (!isset($data['button_text']) || $data['button_text'] == null || $data['button_text'] == "") {
            return ['success' => false, 'error' => 'Button Text wajib diisi'];
        }

        if (!isset($data['message']) || $data['message'] == null || $data['message'] == "") {
            return ['success' => false, 'error' => 'Message wajib diisi'];
        }

        if (!isset($data['lists']) || $data['lists'] == null || $data['lists'] == "" || empty($data['lists'])) {
            return ['success' => false, 'error' => 'Lists wajib diisi'];
        }

        $data = [
            'api_key' => $data['api_key'],
            'sender' => $data['sender'],
            'number' => $data['number'],
            'name' => $data['list_name'],
            'title' => $data['title'],
            'footer' => $data['footer'],
            'message' => $data['message'],
            "list" => $data['lists'],
            'buttontext' => $data['button_text']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function generateQR($data)
    {
        $url = 'https://wa.srv26.wapanels.com/generate-qr';

        if (!isset($data['api_key']) || $data['api_key'] == null || $data['api_key'] == "") {
            return ['success' => false, 'error' => 'Api Key wajib diisi'];
        }

        if (!isset($data['device']) || $data['device'] == null || $data['device'] == "") {
            return ['success' => false, 'error' => 'Device wajib diisi'];
        }

        $data = [
            'api_key' => $data['api_key'],
            'device' => $data['device']
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
