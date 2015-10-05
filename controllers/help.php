<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 16:46
 */
class Help extends Controller{

    public function __construct()
    {
//        echo'--хелп контроллер--';
        parent ::__construct();
        $this->view->render('help/index');
    }

    public function other($arg = false)
    {
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}
