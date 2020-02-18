<?php

namespace App\Model;

class Client {

    private $id;
    private $firstname;
    private $lastname;
    private $entry_date;
    private $departure_date;
    private $room;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of entry_date
     */ 
    public function getEntry_date()
    {
        return $this->entry_date;
    }

    /**
     * Set the value of entry_date
     *
     * @return  self
     */ 
    public function setEntry_date($entry_date)
    {
        $this->entry_date = $entry_date;

        return $this;
    }

    /**
     * Get the value of departure_date
     */ 
    public function getDeparture_date()
    {
        return $this->departure_date;
    }

    /**
     * Set the value of departure_date
     *
     * @return  self
     */ 
    public function setDeparture_date($departure_date)
    {
        $this->departure_date = $departure_date;

        return $this;
    }

    /**
     * Get the value of room
     */ 
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set the value of room
     *
     * @return  self
     */ 
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }
}