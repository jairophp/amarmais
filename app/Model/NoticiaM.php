<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/12/15
 * Time: 20:52
 */
class NoticiaM{

    private $data;
    private $result;
    private $msg;

    const Entity = "noticia";


    public function insert($data){
        $this->data = $data;
        $cad = new Create();
        $cad->ExeCreate(self::Entity, $this->data);


    }


}



