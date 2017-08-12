<?php
// get values passe from form in login.php
$username = POST['user'];
//username
$password = POST['pass'];
//password

// to prevent mysql inject
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// connect to server and select datbase


?>