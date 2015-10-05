<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 18:54
 */
class View {
    public function __construct()
    {
//        echo ' 6 гловна в\'юшка';
    }

    public function render($name, $noInclude = false) {
        if($noInclude == true) {
            require 'views/'.$name.'.php';
        } else {
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }
}