<?php

class Role {
    private $id_role = 0;
    private $name_role = null;

    public function __construct($id_role, $name_role)
    {
        $this->id_role = $id_role;
        $this->name_role = $name_role;
    }

    public function getIdRole()
    {
        return $this->id_role;
    }

    public function getNameRole()
    {
        return $this->name_role;
    }

    public function setNameRole($name_role)
    {
        $this->name_role = $name_role;
    }


}