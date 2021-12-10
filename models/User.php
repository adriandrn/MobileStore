<?php

class User {
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
        return password_hash($this->password,PASSWORD_BCRYPT,['coste'=>4]);
    }
    public function setId($id): void {
        $this->id = $id;
    }
    public function setCi($ci): void {
        $this->ci = $this->db->real_escape_string($ci);
    }
    public function setName($name): void {
        $this->name = $this->db->real_escape_string($name);
    }
    public function setEmail($email): void {
        $this->email = $this->db->real_escape_string($email);
    }
    public function setPhone($phone): void {
        $this->phone = $this->db->real_escape_string($phone);
    }
    public function setRole($role): void {
        $this->role = $role;
    }
    public function setAddress($address): void {
        $this->address = $this->db->real_escape_string($address);
    }
    public function setPassword($password): void {
        $this->password = $this->db->real_escape_string($password);
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
    public function register(){
        $sql = "INSERT INTO users VALUES(NULL,'{$this->getName()}','{$this->getEmail()}','{$this->getPhone()}','user','{$this->getAddress()}','{$this->getPassword()}',NULL,NULL,NOW(),NOW());";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function login(){
        $sql = "SELECT * FROM users WHERE email='{$this->getEmail()}'";
        $login = $this->db->query($sql);
        if($login && $login->num_rows==1){
            $user = $login->fetch_object();
            $verify = password_verify($this->password,$user->password);
            if($verify){
                $result = $user;
            }else{
                $result = false;
            }
        }
        return $result;
    }

}
