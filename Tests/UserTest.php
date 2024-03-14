<?php

use PHPUnit\Framework\TestCase;

use App\User;
use App\Author;

class UserTest extends TestCase{

    public function test_author_data(){
        $user_profile = new User("Guest", "Guest9029", 9029);

        $user_profile->getUserData();

        //Change the asserts
        $this->assertIsString($user_profile->getUserData()[0]);
        $this->assertIsString($user_profile->getUserData()[1]);
        $this->assertIsInt($user_profile->getUserData()[2]);
    }
}

?>