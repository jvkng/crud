<?php

namespace App\Model;

class Conexao {

    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo_ini3d16;charset=utf8','root','12345678');
        
        endif;
            return self::$instance;
    
    }
    
}