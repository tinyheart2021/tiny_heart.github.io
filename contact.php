<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            background: #fff;
            margin: 50px auto;
            padding: 20px;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        img {
            max-width: 200px;
            margin: 20px 0;
        }
        .qr-code {
            margin: 20px 0;
        }
        button {
            background: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Support Our Cause</h1>
        <p>Your contribution can make a difference! Scan the QR code below or click on the payment link to donate.</p>

        <!-- QR Code -->
        <div class="qr-code">
            <img src="qr-code.png" alt="Donate QR Code">
        </div>

        <!-- UPI Link -->
        <a href="upi://pay?pa=yourupi@bank&pn=YourName&cu=INR" target="_blank">
            <button>Donate via UPI</button>
        </a>

        <!-- Other Payment Options -->
        <p>Or use the following payment methods:</p>
        <ul>
            <li><strong>Google Pay/PhonePe/Paytm UPI ID:</strong> yourupi@bank</li>
            <li><strong>Bank Transfer:</strong></li>
            <ul>
                <li><strong>Account Name:</strong> Your Name</li>
                <li><strong>Account Number:</strong> 1234567890</li>
                <li><strong>IFSC Code:</strong> ABCD0123456</li>
                <li><strong>Bank Name:</strong> Your Bank</li>
            </ul>
        </ul>
    </div>
</body>
</html>
