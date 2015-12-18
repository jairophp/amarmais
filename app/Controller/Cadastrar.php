<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/17/2015
 * Time: 3:42 PM
 */

include_once 'app/Config.inc.php';
class Cadastrar{


    public function faleconosco(){
           $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
           $faleconosco = new Faleconosco();
           $faleconosco->inserir($dados);
           if($faleconosco->getResult() == true){
                  echo "<script>alert('Obrigado por Entrar Em Contato conosco Responderemos assim que Possivel');</script>";
                  echo "<script>window.location='index.php?event=contato';</script>";
         }
    }
}

