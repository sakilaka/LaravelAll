<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Contact Us</h2>
        <p>This is contact us page</p>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about-us/abcd') }}">About Us</a></li>
            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
        </ul>
    </div>
</body>
</html>