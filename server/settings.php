<?php
//definiamo i nostri parametri di configurazione
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'admincle');
define('DB_NAME', 'shop_db');


//connessione al db
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

//controllo la connessione
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}


?>