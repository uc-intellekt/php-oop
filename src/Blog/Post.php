<?php

class Post
{
    public $heading = 'Untitled';
    
    public $content = '';
    
    public function read()
    {
        echo 'Read the "' . $this->heading . '"';
    }
}
