<?php

class Instrument {
    private $id_instrument = 0;
    private $name_instrument = null;

    public function __construct($id_instrument, $name_instrument)
    {
        $this->id_instrument = $id_instrument;
        $this->name_instrument = $name_instrument;
    }

    public function getIdInstrument()
    {
        return $this->id_instrument;
    }

    public function getNameInstrument()
    {
        return $this->name_instrument;
    }

    public function setNameInstrument($name_instrument)
    {
        $this->name_instrument = $name_instrument;
    }

}