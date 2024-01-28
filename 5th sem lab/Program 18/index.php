<?php

setcookie('user', 'JohnDoe');  

$retrievedValue = $_COOKIE['user'] ?? null; 

echo "Cookie Value: $retrievedValue\n";
?>