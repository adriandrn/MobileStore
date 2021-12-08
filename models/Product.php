<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Product
{

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

    public function __construct()
    {
        $this->bd = DataBase::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getVendor_id()
    {
        return $this->vendor_id;
    }

    public function getBrand_id()
    {
        return $this->brand_id;
    }

    public function getRange_id()
    {
        return $this->range_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getPurchase_price()
    {
        return $this->purchase_price;
    }

    public function getSale_price()
    {
        return $this->sale_price;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setVendor_id($vendor_id): void
    {
        $this->vendor_id = $vendor_id;
    }

    public function setBrand_id($brand_id): void
    {
        $this->brand_id = $brand_id;
    }

    public function setRange_id($range_id): void
    {
        $this->range_id = $range_id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function setPath($path): void
    {
        $this->path = $path;
    }

    public function setPurchase_price($purchase_price): void
    {
        $this->purchase_price = $purchase_price;
    }

    public function setSale_price($sale_price): void
    {
        $this->sale_price = $sale_price;
    }



    public function getAll()
    {
        $sql = "select p.*,i.path from products p join images i on p.id = i.product_id group by p.id limit 8";
        $products = $this->bd->query($sql);
        return $products;
    }

    public function getAllNotLimit()
    {
        $sql = "select p.id,p.name,p.description,b.name as brand,r.gama as 'range',p.year,i.path,p.sale_price from products p join ranges r on p.range_id = r.id join brands b on p.brand_id = b.id join images i on p.id=i.product_id group by p.id;";
        $products = $this->bd->query($sql);
        return $products;
    }

    public function getAllByAjax($brand)
    {
        $sql = "select p.*,i.path from products p join images i on p.id = i.product_id where p.brand_id = $brand group by p.id limit 8";
        $products = $this->bd->query($sql);
        return $products;
    }

    public function getAllYear()
    {
        $sql = "select year from products group by year";
        $years = $this->bd->query($sql);
        return $years;
    }

    public function getByRange($range)
    {
        $sql = "select p.id,p.name,p.description,b.name as brand,r.gama as 'range',p.year,i.path,p.sale_price from products p join ranges r on p.range_id = r.id join brands b on p.brand_id = b.id join images i on p.id=i.product_id where r.id = $range group by p.id;";
        $products = $this->bd->query($sql);
        return $products;
    }

    public function getById($id)
    {
        $sql = "select p.id,p.name,p.description,b.name as brand,r.gama as 'range',p.year,p.sale_price,pd.screen,pd.processor,pd.ram,pd.storage,pd.expansion,pd.camera,pd.battery,pd.os,pd.profile,pd.weight from products p join ranges r on p.range_id = r.id join brands b on p.brand_id = b.id  join product_details pd on p.id=pd.product_id where p.id = $id";
        $product = $this->bd->query($sql);
        return $product->fetch_object();
    }

}
