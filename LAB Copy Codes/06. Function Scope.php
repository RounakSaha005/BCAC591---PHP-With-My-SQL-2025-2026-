<?php
 $globalVar = "This is Global";
function testScope() {
 $localVar = "This is Local";
 echo "Inside Function (Local): $localVar<br>";
 global $globalVar;
 echo "Inside Function (Global): $globalVar<br>";
 }
 testScope();
 echo "Outside Function (Global): $globalVar<br>";
 ?>