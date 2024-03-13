<?php

//Calling the class TestCase from the phpunit package
use PHPUnit\Framework\TestCase;

//Calling the class Post and Comment from the App
use App\Post;
use App\Comment;

//Creating the Test class for the Post class
class PostTest extends TestCase{

    //This method validate if the comment object is an instance from the class Comment
    public function test_add_comment_to_post(){
        //Create the instance for the class Post and Comment
        $post = new Post();
        $comment = new Comment();

        //Adding a new Comment to the post object
        $post->addComment($comment);

        //Assert if the post was created
        $this->assertEquials(1, $post->countComments());
        //Assert if the instance is from the Comment class
        $this->assertInstanceOf(Comment::class, $post->getComments());
    }
}

?>