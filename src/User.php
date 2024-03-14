<?php

namespace App;

class User{
    protected $full_name;
    protected $user_name;
    protected $user_age;

    public function __construct(string $full_name, string $user_name, int $user_age){
        $this->full_name = $full_name;
        $this->user_name = $user_name;
        $this->user_age = $user_age;
    }

    //Create a Validation for the user data here
    public function getUserData(){
        return [$this->full_name, $this->user_name, $this->user_age];
    }
}

?>