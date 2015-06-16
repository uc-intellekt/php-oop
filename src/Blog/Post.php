<?php

class Post
{
    private $heading = 'Untitled';
    
    private $content = '';
    
    public function read()
    {
        echo 'Read the "' . $this->heading . '"';
    }
    
    public function getHeading()
    {
        return $this->heading;
    }
    
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }
    
    public function getContent()
    {
        return $this->content;
    }
    
    public function setContent($content)
    {
        $this->content = $content;
    }
}
