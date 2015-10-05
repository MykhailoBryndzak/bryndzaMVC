<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 23:31
 */
class User extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if ($logged == true || $role != 'owner') {
            Session::destroy();
            header('Location: ../login/index');
            die;
        }

    }

    public function  index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = md5($_POST['password']);
        $data['role'] = $_POST['role'];
        $this->model->create($data);
        header('Location: ' . URL . 'user');
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {

    }
}