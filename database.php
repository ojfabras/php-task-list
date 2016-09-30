<?php

define("DSN", "mysql:host=localhost;dbname=tasks_list");
define("USERNAME", "task");
define("PASSWORD", "testing");

$options = array(PDO::ATTR_PERSISTENT => true);

try {
	$conn = new PDO(DSN, USERNAME, PASSWORD, $options);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connection successful";
} catch(PDOException $ex) {
	echo "A database error occurred: ".$ex->getMessage();
}


