<!DOCTYPE html>
<html>
<head>
<title>GET Method</title>
</head>
<body>
<h2>Enter Your Name</h2>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="username" required>
<input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['username'])) {
    $name = htmlspecialchars($_GET['username']);
    echo "<br>";
    echo "Hello, $name!";
}
?>
</body>
</html>