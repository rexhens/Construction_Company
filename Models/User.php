<?php

class User {
    public $user_id;
    public $username;
    public $password;
    public $user_role;
    public $name;
    public $surname;

    public function __construct($db) {
        $this->conn = $db;
    }
}
?>