<?php

    class Dbh {
        
        protected static $conn = ROOT.'/config/database.conf.php';

        public function __construct(){

        }

        protected static function connect(){
            $inc = include(self::$conn);
            
            $pdo = new PDO("mysql: host={$inc['host']};dbname={$inc['dbname']}", $inc['username'], $inc['password']);

            return $pdo;

        }

    }                            

?>