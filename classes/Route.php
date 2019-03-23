<?php

class Route
{
    public static $validRoutes = array();

    public static function set($route, $func){
        self::$validRoutes[] = $route;

        // print_r(self::$validRoutes);
        
        //check for the page that is trying to be accessed
        if($_GET['url'] == $route){
            //run function stored in var
            $func->__invoke();
        }
    }
}
