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
// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $userEmail = $_POST["email"];

    // Validate the email
    if (validateEmail($userEmail)) {
        echo "Email is valid: $userEmail";
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Enter Email:</label>
    <input type="text" id="email" name="email" required>
    <input type="submit" value="Submit">
</form>

</body>
</html>
