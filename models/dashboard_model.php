<?php

/**
 * Created by PhpStorm.
 * User: mike
 * Date: 25.09.2015
 * Time: 0:20
 */
class Dashboard_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

//повідомлення
    function xhrInsert()
    {
        $text = print(print($_POST['text']));

        $sth = $this->db->prepare('INSERT INTO data(text) VALUES(:text)');
        $sth->execute(array(':text' => $text));
        //вивід чату
        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    //отримую чат з бази за допомогую аяккс
    public function xhrGetListings() {
        $sth = $this->db->prepare("SELECT * FROM data");
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
    }
    public  function  xhrDeleteListing() {
        $id = $_POST['id'];
        $sth = $this->db->prepare('DELETE FROM data WHERE id = "'.$id.'"');
        $sth->execute();
    }

}