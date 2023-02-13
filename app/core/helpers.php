<?php

namespace MVC\core;

class helpers{

    public static function redirect($path)
    {
        
        header("Location:".DOMAIN.$path);
        
    }



}