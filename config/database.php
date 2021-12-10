<?php
class DataBase{
    public static function connect(){
        $db = new mysqli("localhost","root","","bd_soft");
        $db->query("SET NAMES 'utf-8'");
        return $db;
    }
}
?>