<?php
function outer() {
    function inner() {
        return "This is From Inner Function";
    }
    echo "This is From Outer Function but<br>";
    echo inner();
}
outer();