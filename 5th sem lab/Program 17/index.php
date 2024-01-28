<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST["email"];

    echo filter_var($userEmail, FILTER_VALIDATE_EMAIL) ?
        "Email is valid: $userEmail" :
        "Invalid email address. Please enter a valid email.";
}
?>


<form method="post" action="">
    <label for="email">Enter Email:</label>
    <input type="text" id="email" name="email" required>
    <input type="submit" value="Submit">
</form>

</body>
</html>
