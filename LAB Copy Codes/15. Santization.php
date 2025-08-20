<!DOCTYPE html>
<html>
<head>
<title>Comment Sanitization</title>
</head>
<body>
<h2>Enter Comment</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<textarea name="comment" rows="5" cols="25" required></textarea><br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $comment = $_POST['comment'];
    $sanitizedComment = strip_tags($comment);
    echo "<br>";
    echo "Your Comment:";
    echo "<br>";
    echo nl2br(htmlspecialchars($sanitizedComment));
}
?>
</body>
</html>