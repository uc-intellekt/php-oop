<?php

class Post
{
    private $published = false;

    private $heading = 'Untitled';
    
    private $content = '';
    
    public function read()
    {
        echo 'Read the "' . $this->heading . '"';
    }
    
    public function isPublished()
    {
        return $this->$published;
    }
    
    public function setPuplished($published)
    {
        $this->$published = (bool)$published;
    }
    
    public function getHeading()
    {
        return $this->heading;
    }
    
    public function setHeading($heading)
    {
        $this->heading = (string)$heading;
    }
    
    public function getContent()
    {
        return $this->content;
    }
    
    public function setContent($content)
    {
        $this->content = (string)$content;
    }
}
