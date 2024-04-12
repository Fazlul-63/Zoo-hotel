<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa; /* Background color for the entire page */
            color: #333;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #ffffff; /* Background color for the container */
            padding: 20px; /* Add padding to the container */
            border-radius: 10px; /* Rounded corners for the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow to the container */
            margin-top: 50px; /* Add space from the top */
        }

        .form-group {
            margin-bottom: 20px; /* Add space between form elements */
        }

        input[type="text"] {
            width: 100%; /* Make input fields fill the container */
            padding: 10px; /* Add padding to the input fields */
            border: 1px solid #ced4da; /* Add border to the input fields */
            border-radius: 5px; /* Rounded corners for the input fields */
            box-sizing: border-box; /* Ensure padding and border are included in width */
        }
    </style>
</head>
<body>
<div class="container">
    <form action="registration.php" method="post">
        <div class="form-group">
            <input type="text" name="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" name="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
