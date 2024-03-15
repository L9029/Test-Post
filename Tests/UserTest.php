<?php

use PHPUnit\Framework\TestCase;

use App\User;
use App\Author;

class UserTest extends TestCase{

    public function test_author_data(){
        $user_profile = new User("<h1>hoa</h1>", "Guest9029", "9029");
        $user_profile->validate_sanitizeUserData();

        //Validation and Sanizitacion data Asserts from the User Parameters
        for ($i=0; $i < 3; $i++) { 
            $this->assertTrue($user_profile->validate_sanitizeUserData()[$i]);
        }
    }
}

?>