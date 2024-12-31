<?php


```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Your existing code follows...
```

```php
<?php
$to = 'your-email@example.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: sender@example.com' . "\r\n" .
           'Reply-To: sender@example.com';

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully.";
} else {
    echo "Mail sending failed.";
}
?>
```

```ini
[mail function]
; For Win32 only.
SMTP = localhost
smtp_port = 25

; For Win32 only.
sendmail_from = meghanacheruvu@gmail.com
```

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = 'meghanacheruvu@gmail.com'; 
    $subject = 'New Feedback from ' . $name;

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
