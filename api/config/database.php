<?php
// используем для подключения к базе данных MySQL 
class Database {
 
    // учетные данные базы данных 
    private $host = "localhost";
    private $db_name = "auth";
    private $username = "root";
    private $password = "spadec";
    public $conn;
 
    // получаем соединение с базой данных 
    public function getConnection() {
 
        $this->conn = null;
 
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>