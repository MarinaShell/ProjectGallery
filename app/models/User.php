<?php

namespace App\models;

class User{
    public string $username;
    public string $password;
    public \DateTime $date;

    public function __construct($entity){

        $this->username = $entity.username; 
        $this->password = $entity.password; 
        $this->data = \DateTime::createFromFormat('U', time());    
    }

}