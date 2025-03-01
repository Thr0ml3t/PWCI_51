<?php

class Person{
    public $name;
    public $email;
    public $username;
    public $password;

    public function __construct($name, $email, $username, $password){
        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function breath(){
        echo $this->name . ' is breathing';
    }
}