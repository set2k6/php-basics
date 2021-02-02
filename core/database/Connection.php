<?php

class Connection {

    public static function make($config){
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo','admin', 'password');
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}