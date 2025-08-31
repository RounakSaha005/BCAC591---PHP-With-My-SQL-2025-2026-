<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Validation</title>
</head>
<body>
<h2>Email Validation Form</h2>
<form method="post">
    <label>
        Enter Email:
        <input type="text"
               name="email"
               required>
    </label>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:green;'>Valid Email: <b>$sanitizedEmail</b></p>";
    } else {
        echo "<p style='color:red;'>Invalid Email Format</p>";
    }
}
?>
</body>
</html>