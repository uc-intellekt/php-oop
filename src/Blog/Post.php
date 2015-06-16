<?php

class Post
{
    private $published;

    private $heading;
    
    private $content;
    
    public function __construct()
    {
        $this->published = false;
        $this->heading = 'Untitled';
        $this->content = '';
    }

    public function __toString()
    {
        return $this->heading;
    }
    
    public function read()
    {
        echo 'Read the "' . $this->heading . '"';
    }
    
    public function publish()
    {
        $this->published = true;
    }
    
    public function unpublish()
    {
        $this->published = false;
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
