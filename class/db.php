<?php

class Db{
    protected function connect(){
        try {
            $username = "root";
            $pwd = "";
            $db = new PDO('msqli:host=localhost;dbname=ooplogin', $username, $pwd);
            return $db;
        } catch (PDOException $e) {
            print "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}