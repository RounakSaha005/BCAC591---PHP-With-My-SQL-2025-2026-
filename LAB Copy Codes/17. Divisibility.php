<?php
$number = 13;
if ($number % 3 == 0 and $number % 5 == 0) {
    echo "The number is divisible by both 3 and 5. <br>";
} elseif ($number % 3 == 0) {
    echo "The number is divisible by 3. <br>";
} elseif ($number % 5 == 0) {
    echo "The number is divisible by 5. <br>";
} else {
    echo "The number is neither divisible by 3 nor 5. <br>";
}
?>