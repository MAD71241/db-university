<?php

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university");

$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check for connection errors
if ($connection && $connection->connect_error) {
    echo "Connection Failed! Error n° " .$connection->connect_errno ." " .$connection->connect_error;
    die();
}
echo "Connection succesfull";

$howManyCourses = "
SELECT COUNT(id) AS numero_corsi,  department_id 
FROM degrees 
GROUP BY department_id";

$result = $connection->query($howManyCourses);
if ($result && $result->num_rows > 0) {
    while ($a = $result->fetch_array()) {
        ?>

        <h2>ID dipartimento: <?php echo $a['department_id']; ?></h2>
        <h2>Numero corsi: <?php echo $a['numero_corsi']; ?></h2> <?php
        
    }
} elseif ($result) {
    echo 'Nessun Risultato';
  } else {
    echo 'Errore nella query';
  }

$connection->close;

?>