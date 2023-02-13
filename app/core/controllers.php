<?php

namespace MVC\core;
// use Dcblogdev\PdoWrapper\Database;


// use PDO;
// use Exception;


class  controllers
{

    public function view($path,$values)
    {
        extract($values);
        require_once(VIEWS.DS.$path.".php");
    }



}
