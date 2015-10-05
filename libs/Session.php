<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 23:19
 */
class Session
{

    public static function init()
    {
//        echo'--стартанула сесія--';
        @session_start();
    }

    public static function  set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    public static function  destroy() {
        session_destroy();
    }

}