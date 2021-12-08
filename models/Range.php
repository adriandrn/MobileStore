<?php

class Range
{
   private $id;
   private $gama;
   private $description;
   private $bd;

   function __construct()
   {
      $this->bd = DataBase::connect();
   }

   public function getId()
   {
      return $this->id;
   }

   public function setId($id):void
   {
      $this->id = $id;
   }

   public function getName()
   {
      return $this->gama;
   }

   public function setName($gama):void
   {
      $this->gama = $gama;
   }

   public function getDescription()
   {
      return $this->description;
   }

   public function setDescription($description):void
   {
      $this->description = $description;
   }

   public function getAll()
   {
      $sql = "select * from ranges";
      $ranges = $this->bd->query($sql);
      return $ranges;
   }
   
}