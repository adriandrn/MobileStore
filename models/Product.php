<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Product {

    private $id;
    private $vendor_id;
    private $brand_id;
    private $range_id;
    private $name;
    private $year;
    private $description;
    private $path;
    private $purchase_price;
    private $sale_price;
    private $bd;

    public function __construct() {
        $this->bd = DataBase::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getVendor_id() {
        return $this->vendor_id;
    }

    public function getBrand_id() {
        return $this->brand_id;
    }

    public function getRange_id() {
        return $this->range_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getYear() {
        return $this->year;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPath() {
        return $this->path;
    }

    public function getPurchase_price() {
        return $this->purchase_price;
    }

    public function getSale_price() {
        return $this->sale_price;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setVendor_id($vendor_id): void {
        $this->vendor_id = $vendor_id;
    }

    public function setBrand_id($brand_id): void {
        $this->brand_id = $brand_id;
    }

    public function setRange_id($range_id): void {
        $this->range_id = $range_id;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setYear($year): void {
        $this->year = $year;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setPath($path): void {
        $this->path = $path;
    }

    public function setPurchase_price($purchase_price): void {
        $this->purchase_price = $purchase_price;
    }

    public function setSale_price($sale_price): void {
        $this->sale_price = $sale_price;
    }

    public function getAll() {
        $sql = "select * from products limit 8";
        $products = $this->bd->query($sql);
        return $products;
    }
    
    public function getAllByAjax($brand) {
        $sql = "select * from products where brand_id = $brand ";
        $products = $this->bd->query($sql);
        return $products;
    }

}
