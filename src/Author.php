<?php

namespace App;

class Author extends User{
    protected $posts = [];

    //Add an instance of the class Post with all his parameters to the posts array of the author
    public function create_post(Post $created_post){
        $this->posts[] = $created_post;
    }

    //Return the array with all the posts that the author has created
    public function get_posts() : array {
        return $this->posts;
    }
}

?>