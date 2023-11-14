<?php 

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost:3308; dbname=bdweb-blog-etj", "root", "122123");
        $link->exec("set names utf8");

        return $link;
    }
}