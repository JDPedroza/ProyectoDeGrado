<?php
namespace Conexion;

    use PDO;
    use PDOException;

    class conexion{

        private $username;
        private $pw;
        private $dsn;
        private $base;

        public function __construct()
        {
            $this->username = "root";
            $this->pw = "";
            $this->dsn = 'mysql:host=127.0.0.1;dbname=pruebadb;port=3306;charset=UTF8';

            try {
                $this->base = new PDO($this->dsn, $this->username, $this->pw);
                /*echo "Conexion Success";*/
            } catch (PDOException $e) {
                echo "Failed to get DB handle: " . $e->getMessage() . "\n";
                exit;
            }
        }
        
        public function getDataBase(){
            return $this->base;
        }

  }