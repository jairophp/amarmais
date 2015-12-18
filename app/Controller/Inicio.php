<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 21/10/2015
 * Time: 00:32
 */
//include_once 'app/Config.inc.php';
class Inicio
{

    public function index()
    {
        include_once 'app/View/header.php';
        include_once 'app/View/inicio.php';
        include_once 'app/View/footer.php';
    }

    public function contato()
    {
        include_once 'app/View/header.php';
        include_once 'app/View/contato.php';
        include_once 'app/View/footer.php';
    }

    public function noticia()
    {
        include_once 'app/View/header.php';
        include_once 'app/View/noticia.php';
        include_once 'app/View/footer.php';


    }

    public function evento()
    {
        include_once 'app/View/header.php';
        include_once 'app/View/evento.php';
        include_once 'app/View/footer.php';
    }

    public function quemsomos()
    {
        include_once 'app/View/header.php';
        include_once 'app/View/quemsomos.php';
        include_once 'app/View/footer.php';

    }

}
