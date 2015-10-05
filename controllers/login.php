<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 14:04
 */
class Login extends Controller
{
    public function __construct()
    {
//        echo '--логін контроллер--';
        parent::__construct();
    }

    public function index()
    {

        $this->view->render('login/index');
    }

    public function run() {
        $this->model->run();
    }
}