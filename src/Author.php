<?php

namespace App;

class Author extends User{
    protected $posts = [];

    public function create_post(Post $created_post){
        $this->posts[] = $created_post;
    }

    public function get_posts() : array {
        return $this->posts;
    }
}

?>