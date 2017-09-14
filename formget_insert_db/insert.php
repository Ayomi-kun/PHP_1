<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>Contact:</label>
<input class="input" name="contact" type="text" value="">
<label>Address:</label>
<textarea cols="25" name="address" rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=colleges", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
//the connection will be closed automatically when the script ends 
//to close the connection before hand use $conn = null;
?>

</body>
</html>