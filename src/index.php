<?php

require __DIR__ . '/Blog/Post.php';

$post = new Post();

//$post->read();

//$post->heading = 'My first post';
//$post->content = 'The content of my first post...';
$post->setHeading('My first post');
$post->setContent('The content of my first post...');

//echo '<h1>' . $post->heading . '</h1>';
//echo '<p>' . $post->content . '</p>';
echo '<h1>' . $post->getHeading() . '</h1>';
echo '<p>' . $post->getContent() . '</p>';
