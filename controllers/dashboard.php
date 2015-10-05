<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 23:31
 */
class Dashboard extends Controller
{
    public function __construct()
    {
//        echo '--Dashboard контроллер--';
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('Location: ../login');
            die;
        }

        $this->view->js = array('dashboard/js/default.js');
    }

    public function  index()
    {
        $this->view->render('dashboard/index');
    }

   public function xhrInsert()
    {

        $this->model->xhrInsert();
    }

    public function xhrGetListings() {
        $this->model->xhrGetListinings();
    }

    public function  logout()
    {
        Session::destroy();
        header('Location: '.URL.'login');
        exit();
    }

    public function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }
}