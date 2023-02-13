<?php

namespace MVC\core;

class  app
{
   private $controllers;
   private $methods;
   private $param=[];


   public function __construct()
   {
        $this->cmp();
        $this->cmp2();
   }

    private function cmp()
    {
        if (!empty($_SERVER["QUERY_STRING"])) {
            $explode=explode("/",$_SERVER["QUERY_STRING"]);
            // print_r($explode);
            $this->controllers = (isset($explode[0])) ? $explode[0]."controllers" : "homecontrollers" ;
            // echo  $this->controllers;
            $this->methods = (isset($explode[1])) ? $explode[1] : "index" ;
        //    echo  $this->methods;
        unset($explode[0],$explode[1]);
        // echo $explode[0] .$explode[1];
        $this->param=array_values($explode);
        // print_r($this->param);

        }else{
            $this->controllers="homecontrollers";
            $this->methods="index";
        }
    }

    private function cmp2()
    {
       $controllers="MVC\controllers\\".$this->controllers;
       if (class_exists($controllers)) {
        $controllers=new $controllers;
            if (method_exists($controllers,$this->methods)) {
                // $controllers->add();
                // $x= $this->methods;
                // $controllers->$x();
                call_user_func_array([$controllers,$this->methods], $this->param);
            }else {
                echo "method $this->methods not found";
            }
        
       }else{
        echo "class $controllers not found";
       }
        
    }
}
