<?php

class Registered {
    private $id_registered = 0;
    private $pseudo = null;
    private $name = null;
    private $first_name = null;
    private $age = null;
    private $gender = null;
    private $mail = null;
    private $description = null;
    private $role = null;
    private $profile_picture = null;
    private $banner_picture = null;

    public function __construct($id_registered, $pseudo, $name, $first_name, $age, $gender, $mail, $description, $role, $profile_picture, $banner_picture)
    {
        $this->id_registered = $id_registered;
        $this->pseudo = $pseudo;
        $this->name = $name;
        $this->first_name = $first_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->mail = $mail;
        $this->description = $description;
        $this->role = $role;
        $this->profile_picture = $profile_picture;
        $this->banner_picture = $banner_picture;
    }

    public function getIdRegistered()
    {
        return $this->id_registered;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getProfilePicture()
    {
        return $this->profile_picture;
    }

    public function setProfilePicture($profile_picture)
    {
        $this->profile_picture = $profile_picture;
    }

    public function getBannerPicture()
    {
        return $this->banner_picture;
    }

    public function setBannerPicture($banner_picture)
    {
        $this->banner_picture = $banner_picture;
    }
}
?>
