<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/12/15
 * Time: 20:51
 */

class Noticia {

   private $data;


    public function cadastrar(){
        $this->data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $cadastr = new NoticiaM();
        $cadastr->insert($this->data);



    }



}