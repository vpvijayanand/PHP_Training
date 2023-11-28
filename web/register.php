<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        /* Inline CSS */
        body { font-family: Arial, sans-serif; }
        .form-container { max-width: 300px; margin: auto; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>User Registration</h2>
        <form action="process_registration.php" method="post">
            Name: <input type="text" name="name" required><br>
            Email: <input type="email" name="email" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <script>
        // Inline JavaScript
        document.querySelector('form').onsubmit = function() {
            if (!confirm("Are you sure you want to submit the form?")) {
                return false; // Prevent form submission
            }
        };
    </script>

</body>
</html>
