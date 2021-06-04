<?php

class Message {
    private $id_message = 0;
    private $date_messsage = null;
    private $hour_message = null;
    private $text_message = null;

    public function __construct($id_message, $date_messsage, $hour_message, $text_message)
    {
        $this->id_message = $id_message;
        $this->date_messsage = $date_messsage;
        $this->hour_message = $hour_message;
        $this->text_message = $text_message;
    }

    public function getIdMessage()
    {
        return $this->id_message;
    }

    public function getDateMesssage()
    {
        return $this->date_messsage;
    }

    public function setDateMesssage($date_messsage)
    {
        $this->date_messsage = $date_messsage;
    }

    public function getHourMessage()
    {
        return $this->hour_message;
    }

    public function setHourMessage($hour_message)
    {
        $this->hour_message = $hour_message;
    }

    public function getTextMessage()
    {
        return $this->text_message;
    }

    public function setTextMessage($text_message)
    {
        $this->text_message = $text_message;
    }
}

