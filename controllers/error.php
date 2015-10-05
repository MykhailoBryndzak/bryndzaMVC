<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 17:54
 */
class Error extends Controller
{
    public function  __construct()
    {
//        echo'--Еррор контроллер--';
        parent ::__construct();
        $this->view->msg = 'Сторінки не існує';
        $this->view->render('error/index');
    }

}