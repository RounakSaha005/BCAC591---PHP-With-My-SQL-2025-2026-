<!DOCTYPE html>
<html>
<head>
<title>Sum With POST Method</title>
</head>
<body>
<h2>Enter Two Numbers</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
1st Number: <input type="number" name="num1" required><br><br>
2nd Number: <input type="number" name="num2" required><br><br>
<input type="submit" value="Calculate Sum">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
     $sum = $num1 + $num2;
    echo "<br>";
    echo "Result:";
    echo "The sum of $num1 and $num2 is $sum.";
}
?>
</body>
</html>