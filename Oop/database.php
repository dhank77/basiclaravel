<?php

class Database
{
        private $host = 'localhost';
        private $user = 'root';
        private $password = 'root1234';
        private $port = 3306;
        private $databaseName = 'basicphp';

        public function koneksi()
        {
                try {
                        $koneksi = new mysqli($this->host, $this->user, $this->password, $this->databaseName, $this->port);
                        return $koneksi;
                } catch (mysqli_sql_exception $e) {
                        echo "error koneksi database" . $e->getMessage();
                }
        }
}

$database = new Database();
$koneksiDb = $database->koneksi();
//SELECT * FROM users WHERE umur >= 30;
// $dataUsers = $koneksiDb->query('SELECT * FROM users');
// $dataUsers = $dataUsers->fetch_all(MYSQLI_ASSOC);

$insert = $koneksiDb->query("INSERT INTO users (nama, umur) VALUES ('budi2', 10);");
var_dump($insert);
