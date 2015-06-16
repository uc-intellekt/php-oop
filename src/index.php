<?php

require __DIR__ . '/Blog/Post.php';

$post = new Post();
$post->heading = 'My first post';
$post->content = 'The content of my first post...';

//echo '<h1>' . $post->heading . '</h1>';
//echo '<p>' . $post->content . '</p>';

$post->read();
