<?php

namespace Model;

class Admin 
{
    protected string $email = "";

    protected string $password = "";

    public function setEmail($e) :void 
    {
        $this->email = $e;
    }

}