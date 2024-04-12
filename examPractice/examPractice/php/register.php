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

        input[type="text"], input[type="password"] {
            width: 100%; /* Make input fields fill the container */
            padding: 10px; /* Add padding to the input fields */
            border: 1px solid #ced4da; /* Add border to the input fields */
            border-radius: 5px; /* Rounded corners for the input fields */
            box-sizing: border-box; /* Ensure padding and border are included in width */
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <form id="registrationForm" action="registration.php" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <input type="text" name="firstname" id="firstname" placeholder="First Name">
            <span class="error-message" id="firstnameError"></span>
        </div>
        <div class="form-group">
            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
            <span class="error-message" id="lastnameError"></span>
        </div>
        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Email">
            <span class="error-message" id="emailError"></span>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password">
            <span class="error-message" id="passwordError"></span>
        </div>
        <div class="form-group">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
            <span class="error-message" id="confirmPasswordError"></span>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script>
    function validateForm() {
        var firstname = document.getElementById("firstname").value;
        var lastname = document.getElementById("lastname").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        var firstnameError = document.getElementById("firstnameError");
        var lastnameError = document.getElementById("lastnameError");
        var emailError = document.getElementById("emailError");
        var passwordError = document.getElementById("passwordError");
        var confirmPasswordError = document.getElementById("confirmPasswordError");

        // Reset error messages
        firstnameError.innerText = "";
        lastnameError.innerText = "";
        emailError.innerText = "";
        passwordError.innerText = "";
        confirmPasswordError.innerText = "";

        // Validation rules
        if (firstname === "") {
            firstnameError.innerText = "Please enter your first name";
            return false;
        }

        if (lastname === "") {
            lastnameError.innerText = "Please enter your last name";
            return false;
        }

        if (email === "") {
            emailError.innerText = "Please enter your email";
            return false;
        } else if (!isValidEmail(email)) {
            emailError.innerText = "Please enter a valid email address";
            return false;
        }

        if (password === "") {
            passwordError.innerText = "Please enter a password";
            return false;
        }

        if (confirm_password === "") {
            confirmPasswordError.innerText = "Please confirm your password";
            return false;
        } else if (password !== confirm_password) {
            confirmPasswordError.innerText = "Passwords do not match";
            return false;
        }

        return true;
    }

    function isValidEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
