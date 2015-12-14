<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 21/10/2015
 * Time: 00:32
 */
//include_once 'app/Config.inc.php';
class Inicio{

    public function index(){
            include_once 'app/View/header.php';
            include_once 'app/View/inicio.php';
            include_once 'app/View/footer.php';
    }
}