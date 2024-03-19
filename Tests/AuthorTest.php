<?php

use PHPUnit\Framework\TestCase;

use App\Author;
use App\Post;

class AuthorTest extends TestCase{
    public function test_create_post(){
        $post = new Post();
        $author = new Author("Angel", "Angel2003", 21);

        $author->create_post($post);
        
        $this->assertIsArray($author->get_posts());

        foreach ($author->get_posts() as $posts) {
            $this->assertInstanceOf(Post::class, $posts);
        }
    }
}

?>