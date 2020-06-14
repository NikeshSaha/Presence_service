<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error page</title>
    <style>
        .error_line{
            color: red;
            text-align: center;
        }
        .error_line h1{
            display: inline-block;
            border-bottom: 3px solid green;
        }
        .error{
            margin-top: 50px;
        }
        .error img{
            height: 400px;
        }
    </style>
    
</head>
<body>
    <div class="error_line">
        <marquee behavior="" direction="right" style="font-size: 22px; color:green;">Login Failed</marquee>
        <h1>You are not a authorised user</h1>
    </div>
    <div class="error">
        <center><img src="error.png" alt="Image not available"></center>
    </div>
</body>
</html>