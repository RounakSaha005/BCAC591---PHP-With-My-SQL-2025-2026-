<?php
function isEven($n): bool
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}
for ($i = 0; $i < 10; $i++) {
    echo isEven($i) . "<br>";
}
?>