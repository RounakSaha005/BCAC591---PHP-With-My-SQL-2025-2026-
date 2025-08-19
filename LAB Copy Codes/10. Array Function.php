<?php
 $numbers = [10, 5, 20, 15, 25];
 echo "Original Array: ";
 print_r($numbers);
 echo "<br><br>";
 sort($numbers);
 echo "Ascending Order: ";
 print_r($numbers);
 echo "<br><br>";
 rsort($numbers);
 echo "Descending Order: ";
print_r($numbers);
 ?>