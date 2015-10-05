<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 17:59
 */
class Controller
{
    public function  __construct()
    {
//        echo '--5 головний контроллер--';
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = 'models/' . $name . '_model.php';
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}