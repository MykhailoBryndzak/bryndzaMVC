<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 22.09.2015
 * Time: 17:46
 */
class Bootstrap {
    public function __construct() {
//        echo' 3 -в бутстрапі--';
        $url = isset($_GET['url']) ? $_GET['url'] : null;//isset провірка на існування урла
        $url = rtrim($url, '/');//видаляю слеш
        $url = explode('/', $url);//розбиваю на масив по слешу

        if(empty($url[0])) {//якщо нічого немає в урлі, тоді спрацьовує index контроллер
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) { //якщо файл є, тоді підключаю його
            require $file;
        }else{ //якщо немає, підключаю контроллер який відповідальний за обробку помилок
            require 'controllers/error.php';
            $controller = new Error();
            return false;
        }
        $controller = new $url[0];//отримую контроллер з $url[0]
        $controller->loadModel($url[0]);
        if (isset($url[2])) {//перевірка чи є параметр
            if(method_exists($controller,$url[1])){//перевірка на метод
            }else{
                echo'11Помилка(немає параметра або метода)!';
            }
        } else {
            if (isset($url[1])) {
                $controller->$url[1]();//якщо немає параметра, тоді викликаю метод
            }
        }

    }
}