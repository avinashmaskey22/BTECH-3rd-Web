<?php
//Creating a cookie
$cookie_name = "name";
$cookie_value = "Kathmandu University School of Education.";

setcookie($cookie_name, $cookie_value, time() + 20, "/");

//Accessing cookie value
echo $_COOKIE['name'];

//Deleting a cookie valueSS
setcookie($cookie_name, '', time() - 1, "/");