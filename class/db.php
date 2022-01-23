<?php

class Db{
    protected function connect(){
        try {
            $username = "root";
            $password = "";
            $db = new PDO('msqli:host=localhost;dbname=ooplogin', $username, $password);
            return $db;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}