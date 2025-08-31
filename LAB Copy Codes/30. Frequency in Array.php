<?php
$numbers = [7, 3, 1, 7, 5, 3, 9, 3, 2, 7];
$frequency = array_count_values($numbers);
echo "Array Elements: " . implode(", ", $numbers) . "<br><br>";
echo "Element Frequencies:<br>";
foreach ($frequency as $element => $count) {
    echo $element . " occurs " . $count . " times<br>";
}
?>