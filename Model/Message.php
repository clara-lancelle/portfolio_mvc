<?php

namespace Model;

class Message 
{

    protected string $content = "";

    public function setContent($m) :void 
    {
        $this->content = $m;
    }

    //Getters

    public function getContent() :string
    {
        return $this->content;
    }
}