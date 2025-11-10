<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Query</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .email-header {
            background-color: #1a73e8;
            color: #ffffff;
            padding: 20px 30px;
            text-align: center;
        }

        .email-header h2 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        .email-body {
            padding: 30px;
            color: #333333;
            line-height: 1.6;
        }

        .email-body h3 {
            margin-top: 0;
            color: #1a73e8;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .detail-row {
            margin-bottom: 12px;
        }

        .detail-label {
            font-weight: 600;
            color: #555555;
            display: inline-block;
            width: 100px;
        }

        .detail-value {
            color: #222222;
        }

        .message-box {
            background-color: #f8f9fb;
            border-left: 4px solid #1a73e8;
            padding: 15px;
            border-radius: 6px;
            margin-top: 15px;
            white-space: pre-line;
        }

        .email-footer {
            background-color: #f1f3f6;
            text-align: center;
            font-size: 13px;
            color: #777;
            padding: 15px 10px;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="email-header">
            <h2>📩 New Package Query Received</h2>
        </div>

        <div class="email-body">
            <h3>Query Details</h3>

            <div class="detail-row">
                <span class="detail-label">Category:</span>
                <span class="detail-value">{{ $query->category }}</span>
            </div>
             <div class="detail-row">
                <span class="detail-label">Package:</span>
                <span class="detail-value">{{ $query->package }}</span>
            </div>
             <div class="detail-row">
                <span class="detail-label">Price:</span>
                <span class="detail-value">{{ $query->price }}</span>
            </div>
             <div class="detail-row">
                <span class="detail-label">Name:</span>
                <span class="detail-value">{{ $query->name }}</span>
            </div>
            
            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span class="detail-value">{{ $query->email }}</span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Phone:</span>
                <span class="detail-value">{{ $query->number }}</span>
            </div>

            <div class="detail-row">
                <span class="detail-label">Message:</span>
            </div>

            <div class="message-box">
                {{ $query->message }}
            </div>
        </div>

        <div class="email-footer">
            This message was sent from the contact form on <strong>{{ config('app.name') }}</strong>.<br>
            Please do not reply directly to this email.
        </div>
    </div>

</body>

</html>
