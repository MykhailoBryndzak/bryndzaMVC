<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 13:23
 */
class Model  {
    public function __construct() {
//        echo'--головна моделька--';
        $this->db = new Database();
    }
}