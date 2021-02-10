<?php

class Connection{
    private static function connect(){
        $mysqli = @new mysqli("localhost", "root", "", "paginacion");
        return $mysqli;
    }

    public static function getConnect(){
        return self::connect();
    }
    
    public static function validateConnect(){
        $mysqli = self::getConnect();
        if($mysqli->connect_errno){
            die('Conecction fail!');
        }else{
            return true;
        }
    }
}