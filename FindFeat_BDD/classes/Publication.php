<?php

class Publication {
    private $id_publication = 0;
    private $image = null;
    private $video = null;
    private $description = null;
    private $date_publication = null;

    public function __construct($id_publication, $image, $video, $description, $date_publication)
    {
        $this->id_publication = $id_publication;
        $this->image = $image;
        $this->video = $video;
        $this->description = $description;
        $this->date_publication = $date_publication;
    }

    public function getIdPublication()
    {
        return $this->id_publication;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video)
    {
        $this->video = $video;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDatePublication()
    {
        return $this->date_publication;
    }

    public function setDatePublication($date_publication)
    {
        $this->date_publication = $date_publication;
    }
}

