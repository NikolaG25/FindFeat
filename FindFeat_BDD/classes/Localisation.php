<?php

class Localisation {
    private $id_localisation = 0;
    private $address = null;
    private $town = null;
    private $region = null;

    public function __construct($id_localisation, $address, $town, $region)
    {
        $this->id_localisation = $id_localisation;
        $this->address = $address;
        $this->town = $town;
        $this->region = $region;
    }

    public function getIdLocalisation()
    {
        return $this->id_localisation;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function setTown($town)
    {
        $this->town = $town;
    }

    public function getRegion()
    {
        return $this->region;
    }


    public function setRegion($region)
    {
        $this->region = $region;
    }



}