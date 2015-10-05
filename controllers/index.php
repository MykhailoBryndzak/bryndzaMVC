<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 16:40
 */
class Index extends Controller
{

    public function __construct()
    {
//        echo "-- 4 індекс контроллер-";
        parent::__construct();

    }

    public function  index()
    {
        $this->view->render('index/index');

    }


}