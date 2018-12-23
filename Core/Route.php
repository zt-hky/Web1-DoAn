<?php

namespace Core;

class Route
{
    public static $vailRoutes = array();
    public static $Status = false;
    public static function get($route,$closure)
    {
        if($_SERVER[REQUEST_METHOD] == GET)
        {
            self::run($route,$closure);
        }
    }



    private static function run($route,$closure)
    {
        if ($_SERVER['REQUEST_URI'] == BASEDIR.$route) {
            //self::registerRoute($route);
            $closure->__invoke();
        } else if (explode('?', $_SERVER['REQUEST_URI'])[0] == BASEDIR.$route) {
            //self::registerRoute($route);
            $closure->__invoke();
        } else if ($_GET['url'] == explode('/', $route)[0]) {
            //self::registerRoute(self::dyn($route));
            $closure->__invoke();
        }
    }
}