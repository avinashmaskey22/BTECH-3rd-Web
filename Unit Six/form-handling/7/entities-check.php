<?php

$str = "<b>KUSOED</b>";

$str1 = "© 2025 & <b>KUSOED</b>";

echo strip_tags($str) . "<br>";

echo htmlentities($str1) . "<br>";

echo htmlspecialchars($str1) . "<br>";

// strip_tags() removes all HTML tags but keeps the content inside them.

/* Difference Between htmlsentities and htmlspecialchars:

 - htmlspecialchars() converts only a few essential characters to prevent XSS while keeping text readable.
 - htmlentities() converts all characters that have an entity representation.
 - Use htmlspecialchars() when working with user input in forms or databases to prevent XSS while keeping text readable.
 - Use htmlentities() when you need to ensure that everything is displayed as plain text.
    
    




*/

