<?php

class Signup extends Db{
    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($username, $pwd, $email){
        $stmt = $this->connect()->prepare('INSERT INTO users (username, email, pwd) VALUES (?,?,?);');
        
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($username, $email, $hashedpwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }

}