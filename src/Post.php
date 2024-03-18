<?php

namespace App;

class Post{
    protected $title;
    protected $category;
    protected $content;
    protected $comments = [];

    //Set the title of the content
    public function setTitle(string $title){
        return $this->title = $title;
    }

    //Set the Category of the content
    public function setCategory(Category $category){
        return $this->category = $category;
    }

    //Add the content for the post
    public function addContent(string $content){
        return $this->content = $content;
    }

    //Get all the content of the post with all the caracteristics
    public function getContent(){
        $this->title = $title;
        $this->category = $category;
        $this->content = $content;

        return $this->category;
    }

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