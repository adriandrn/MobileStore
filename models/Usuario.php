<?php

class Usuario {

    private $id;
    private $ci;
    private $name;
    private $email;
    private $phone;
    private $role;
    private $address;
    private $password;
    private $db;

    public function __construct() {
        $this->db = DataBase::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getCi() {
        return $this->ci;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDb() {
        return $this->db;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setCi($ci): void {
        $this->ci = $ci;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setRole($role): void {
        $this->role = $role;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setDb($db): void {
        $this->db = $db;
    }

    //Methods for Database interaction
    public function getAll() {
        $sql = "SELECT * FROM users";
        $users = $this->db->query($sql);
        if ($users->num_rows >= 1) {
            return $users;
        } else {
            return null;
        }
    }

}
