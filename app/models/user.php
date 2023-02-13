<?php
namespace MVC\models;
use MVC\core\models;
class user extends models
{
    
    public function getAllUser()
    {
        $db= models::db()->run("SELECT * FROM products")->fetchAll();
        return $db;
    }
    public static function getUser($email,$password)
    {
        $db= models::db()->run("SELECT * FROM user WHERE email = ? && password=? ", [$email,$password])->fetch();
        return $db;
    }

}
