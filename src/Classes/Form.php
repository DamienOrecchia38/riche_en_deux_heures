<?php

class Form{

    private $Lastname;
    private $Firstname;
    private $Email;

    public function __construct($Lastname, $Firstname, $Email) {
        $this->Lastname = $Lastname;
        $this->Firstname = $Firstname;
        $this->Email = $Email;
    }

    /**
     * Get the value of Lastname
     */ 
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @return  self
     */ 
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    /**
     * Get the value of Firstname
     */ 
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * Set the value of Firstname
     *
     * @return  self
     */ 
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }
}
