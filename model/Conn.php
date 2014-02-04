<?php

class Conn {

    public static function conectaBD() {

        $conn = new PDO("mysql:host=localhost;dbname=questionbd", "root", "101520", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $conn;
    }

    public static function disconectaBD($conn) {
        unset($conn);
    }

}

?>
 