<?php

require_once __DIR__ . '/Env.php';

class DataBase {

    public $connection;

    public function __construct() {
        $host       = getenv('DB_HOST');
        $port       = getenv('DB_PORT');
        $database   = getenv('DB_NAME');
        $user       = getenv('DB_USER');
        $pass       = getenv('DB_PASS');

        $dsn = "pgsql: host=$host; port=$port dbname=$database";

        $this->connection = new PDO($dsn, $user, $pass);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}

?>