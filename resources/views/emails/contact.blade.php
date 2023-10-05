<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Email</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    
    <hr>
    
    <h3>Message:</h3>
    <p>{{ $data['description'] }}</p>
    
    <hr>
    
    <p>This email was sent from the contact form on your website.</p>
</body>
</html>
