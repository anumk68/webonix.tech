<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; color:#333;">
    <h2>New Contact Inquiry</h2>
    <p><strong>Service:</strong> {{ $service }}</p>
    <p><strong>Website:</strong> {{ $website }}</p>
    <p><strong>Name:</strong> {{ $first_name }} {{ $last_name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>

    <hr>
    <p style="font-size:13px; color:#777;">This message was sent from your website contact form.</p>
</body>
</html>
