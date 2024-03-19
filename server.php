<?php

include __DIR__ . "/vendor/autoload.php";

use App\Author;
use App\Category;
use App\Post;

//Setting the Category of the Post
$category = new Category();
$category->setCategory($_POST["category"]);

//Setting the post
$post = new Post();
$post->setTitle($_POST["post_title"]);
$post->setCategory($category);
$post->addContent($_POST["post_content"]);

//Adding the Post to the Author
$author = new Author($_POST["author_name"], $_POST["user_name"], $_POST["user_age"]);
$author->create_post($post);

//Showing the Post
$post_title = $post->getContent()[0];
$post_category = ($post->getContent()[1]->getCategory());
$post_content = $post->getContent()[2];

$author_name = $author->getUserData()[0];
$author_username = $author->getUserData()[1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$author_name?> Post</title>
</head>
<body>
    <h1>Titulo: <?= $post_title ?></h1>
    <h2>Author: <?= $author_username ?></h2>
    <h2>Category: <?= $post_category ?></h2>
    <p><?= $post_content ?></p>
</body>
</html>