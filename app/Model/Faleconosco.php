<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/17/2015
 * Time: 3:44 PM
 */

class Faleconosco {

    private $Dados;
    private $result;

    public function inserir($dados){
        $this->Dados = $dados;
        $cadastrar = new Create();
        $cadastrar->ExeCreate('faleconosco', $this->Dados);
        if($cadastrar->getResult())
            $this->result = true;
        else
            $this->result = false;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }



}