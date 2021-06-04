<?php

class Music_style {
    private $id_music_style = 0;
    private $name_music_style = null;

    public function __construct($id_music_style, $name_music_style)
    {
        $this->id_music_style = $id_music_style;
        $this->name_music_style = $name_music_style;
    }


    public function getIdMusicStyle()
    {
        return $this->id_music_style;
    }


    public function getNameMusicStyle()
    {
        return $this->name_music_style;
    }


    public function setNameMusicStyle($name_music_style)
    {
        $this->name_music_style = $name_music_style;
    }


}
