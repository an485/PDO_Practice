<?php

$servername = "sql2.njit.edu";
$username = "an485";
$dbname = "an485";
$password2 = "azlHvWl8h";
$password = "X6XHCBKdK";
$dsn = "mysql:host=$servername;dbname=$dbname";


try {
    $db = new PDO($dsn, $username, $password);
     // PDO error exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
	
	
	##test some stuff
	// $stmt = $db->prepare("SELECT id, fname, email FROM accounts WHERE id < 1"); 
   //  $stmt->execute();

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>