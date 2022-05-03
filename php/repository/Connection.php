<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-18-214-134-226.compute-1.amazonaws.com";
        const USERNAME = "umygyazdtujgme";
        const PASSWORD = "66021d81652d3062b7f08d1834d5561edcb4ed9a9038b0b3123f95a070bfd279";
        const SCHEMA = "dhgkj88d61vrh";
        const PORT = 5432;

        private $conn;

        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    } 