<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 23.09.2015
 * Time: 21:12
 */
class Login_Model extends Model
{
    public function __construct() {
        parent ::__construct();
    }
    public function run(){

        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password) AND role = :role ");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password'],
            ':role' => $_POST['role']
        ));
        $data = $sth->fetch();
        $data = $sth->fetchAll();
        $count = $sth-> rowCount();
        if($count > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('Location: ../dashboard/index');
        }else{
            header('Location: ../login/index');
        }
    }
}