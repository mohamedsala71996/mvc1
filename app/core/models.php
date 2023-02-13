<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database ;

class models{

    public static function db()
    {
        

        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE,
            //optional
            'password' => PASSWORD,
            'type' => TYPE,
            'charset' => 'utf8',
            'host' => HOST,
            'port' => PORT
        ];
        
      return  $db = new Database($options);
    }
}