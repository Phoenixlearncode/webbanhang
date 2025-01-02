<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
    <style>
        .qr-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .qr-box {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
        }
    </style>
</head>
<body>
    <div class="qr-container">
        <div class="qr-box">
            {!! QrCode::size(300)->generate($url) !!}
        </div>
    </div>
</body>
</html>