# Watsap PHP Library

Watsap PHP Library is a simple library for integrating WhatsApp messaging service using cURL. This library provides several methods for sending messages, media, buttons, templates, lists, and QR codes through WhatsApp service.

## Installation

You can install the library using Composer. Make sure Composer is installed in your project. Open the terminal and run the following command:

```bash
composer require inotechno/watsap-broadcast
```

## Usage

Here is an example of using the library to send messages and media:

```php
use Watsap\Watsap;

// Initialize Watsap object
$watsap = new Watsap();

// Send Message
$messageData = [
    'api_key' => 'your_api_key',
    'sender' => 'sender_id',
    'number' => '628123456789',
    'message' => 'Hello, this is a WhatsApp message!'
];

$response = $watsap->sendMessage($messageData);
var_dump($response);

// Send Media
$mediaData = [
    'api_key' => 'your_api_key',
    'sender' => 'sender_id',
    'number' => '628123456789',
    'media_type' => 'image',
    'caption' => 'This is an image',
    'media_url' => 'https://example.com/image.jpg'
];

$response = $watsap->sendMedia($mediaData);
var_dump($response);

// Send Button
 $data = [
    'api_key' => 'your_api_key',
    'sender' => 'sender_id',
    'number' => '628123456789',
    'footer' => 'optional',
    'message' => 'Hello, this is a WhatsApp message!',
    'url' => 'https://example.com/image.jpg',
    'button' => ["button 1","button 2","button 3"]
];

$response = $watsap->sendButton($data);
var_dump($response);

// Generate QR
 $data = [
    'api_key' => 'your_api_key',
    'device' => '628968865555'
];

$response = $watsap->generateQR($data);
var_dump($response);
```

## Available Methods

1. **sendMessage($data):** 
    - Send text messages to a WhatsApp number.

2. **sendMedia($data):** 
    - Send media (image, video, audio) to a WhatsApp number.

3. **sendButton($data):** 
    - Send messages with buttons to a WhatsApp number.

4. **sendTemplateButton($data):** 
    - Send messages with template buttons to a WhatsApp number.

5. **sendList($data):** 
    - Send a list to a WhatsApp number.

6. **generateQR($data):** 
    - Generate a QR code using the WhatsApp service.

**Note:**
- Make sure to replace the `api_key` and other information with your Watsap.id account details.

## Notes

Ensure that you understand and comply with the terms of use of the WhatsApp service. This library is not responsible for misuse. Use it wisely and in accordance with WhatsApp Business API guidelines.

## License

Watsap PHP Library is licensed under the MIT License. See [LICENSE](LICENSE) for more information.


