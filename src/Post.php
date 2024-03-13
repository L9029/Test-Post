<?php

namespace App;

class Post{
    protected $comments = [];

    //the parameter Comment in the function validate that the comment var has to be the Comment type
    public function addComment(Comment $comment){
        $this->comments[] = $comment;
    }

    //Method that count all the comments from the app
    public function countComments(){
        return count($this->comments);
    }

    //Method that show all the comments from the app
    public function getComments(){
        return $this->comments;
    }
}

?>