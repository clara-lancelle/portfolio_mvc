<?php

namespace Model;

class Contact
{
    protected string $email = "";

    protected string $firstname = "";

    protected string $lastname = "";

    //Setters   

    public function setEmail($e) :void 
    {
        $this->email = $e;
    }
    public function setLastname($l) :void 
    {
        $this->lastname = $l;
    }
    public function setFirstname($f) :void 
    {
        $this->firstname = $f;
    }

    //Getters

    public function getEmail() :string
    {
        return $this->email;
    }
    public function getFirstname() :string
    {
        return $this->firstname;
    }
    public function getLastname() :string
    {
        return $this->lastname;
    }
}