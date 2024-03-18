<?php

//Calling the class TestCase from the phpunit package
use PHPUnit\Framework\TestCase;

//Calling the class Post and Comment from the App
use App\Post;
use App\Comment;
use App\Category;

//Creating the Test class for the Post class
class PostTest extends TestCase{

    //Test add_content_to_post
    public function test_add_content(){
        $post = new Post();
        $content = $post->addContent("Unit Test for adding content to the post");

        $this->assertIsString($content);
    }

    public function test_set_title(){
        $post = new Post();
        $post_title = $post->setTitle("Unit Test");

        $this->assertIsString($post_title);
    }

    public function test_set_category(){
        $post = new Post();
        $category = new Category();

        $this->assertInstanceOf(Category::class, $post->setCategory($category));
    }

    //This method validate if the comment object is an instance from the class Comment
    public function test_add_comment_to_post(){
        //Create the instance for the class Post and Comment
        $post = new Post();
        $comment = new Comment();

        //Adding a new Comment to the post object
        $post->addComment($comment);

        //Assert if the post was created
        $this->assertEquals(1, $post->countComments());
        //Assert if the instance is from the Comment class
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}

?>