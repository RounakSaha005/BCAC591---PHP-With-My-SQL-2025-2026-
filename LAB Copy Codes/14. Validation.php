<!DOCTYPE html>
<html>
<head>
<title>Email Validation</title>
</head>
<body>
<h2>Email Validation Form</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Email: <input type="email" name="email" required>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>Valid Email: " . htmlspecialchars($email);
    } else {
         echo "<br>Invalid Email Format!";
    }
}
?>
</body>
</html>