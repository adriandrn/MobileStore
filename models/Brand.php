<?php

class Brand
{

    private $id;
    private $name;
    private $description;
    private $bd;

    public function __construct()
    {
        $this->bd = DataBase::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getAll()
    {
        $sql = "select * from brands";
        $brands = $this->bd->query($sql);
        return $brands;
    }
}
