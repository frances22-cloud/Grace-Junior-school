<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .content {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
        }

        .header {
            background-color: #f96d00;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .info-row {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #f96d00;
        }

        .label {
            font-weight: bold;
            color: #f96d00;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="header">
                <h2>New Contact Form Submission</h2>
            </div>

            <p>You have received a new message from the Grace Junior School website:</p>

            <div class="info-row">
                <span class="label">Name:</span> {{ $contactMessage->name }}
            </div>

            <div class="info-row">
                <span class="label">Email:</span> {{ $contactMessage->email }}
            </div>

            <div class="info-row">
                <span class="label">Phone:</span> {{ $contactMessage->phone }}
            </div>

            <div class="info-row">
                <span class="label">Subject:</span> {{ $contactMessage->subject }}
            </div>

            <div class="info-row">
                <span class="label">Message:</span><br>
                {{ $contactMessage->message }}
            </div>

            <div class="info-row">
                <span class="label">Received:</span> {{ $contactMessage->created_at->format('F j, Y \a\t g:i A') }}
            </div>

            <p style="margin-top: 20px; color: #666; font-size: 14px;">
                Please respond to this inquiry at your earliest convenience.
            </p>
        </div>
    </div>
</body>

</html>
