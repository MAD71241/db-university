<?php

define("DB_SERVERNAME", "local_server");
define("DB_USERNAME", "my_user");
define("DB_PASSWORD", "my_password");
define("DB_NAME", "university");

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_PASSWORD);

var_dump($connection);

?>