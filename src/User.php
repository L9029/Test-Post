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

    //Validation and Sanitize for the user data
    public function validate_sanitizeUserData(){
        $htmlentities_full_name_convert_to_str = is_string(htmlentities($this->full_name));
        $htmlentities_username_convert_to_str = is_string(htmlentities($this->user_name));
        $filter_age_user = is_int(filter_var($this->user_age, FILTER_VALIDATE_INT));

        return [$htmlentities_full_name_convert_to_str, $htmlentities_username_convert_to_str, $filter_age_user];
    }

    //Get the User Data
    public function getUserData(){
        return [$this->full_name, $this->user_name, $this->user_age];
    }
}

?>