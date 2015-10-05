<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 20:46
 */
class Database extends PDO {

    public function __construct() {
//        echo'--клас Database extends PDO -- ';
        parent::__construct('mysql:host=localhost;
                                     dbname=mymvc',
                                     'root', '');
    }
}