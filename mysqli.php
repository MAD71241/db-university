<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "university");

$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check for connection errors
if ($connection && $connection->connect_error) {
    echo "Connection Failed! Error n° " .$connection->connect_errno ." " .$connection->connect_error;
    die();
}
echo "Connection succesfull";
?>