<?php

class Form{

    private $Lastname;
    private $Firstname;
    private $Age;
    private $Sex;
    private $Phone;
    private $Email;

    public function __construct($Lastname, $Firstname, $Age, $Sex, $Phone, $Email) {
        $this->Lastname = $Lastname;
        $this->Firstname = $Firstname;
        $this->Age = $Age;
        $this->Sex = $Sex;
        $this->Phone = $Phone;
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
     * Get the value of Age
     */ 
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Set the value of Age
     *
     * @return  self
     */ 
    public function setAge($Age)
    {
        $this->Age = $Age;

        return $this;
    }

    /**
     * Get the value of Sex
     */ 
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set the value of Sex
     *
     * @return  self
     */ 
    public function setSexe($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    /**
     * Get the value of Phone
     */ 
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set the value of Phone
     *
     * @return  self
     */ 
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

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
