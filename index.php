<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 21/10/2015
 * Time: 00:34
 */

$class   =  (isset($_GET['con']))    ?  $_GET['con']   : 'Inicio';
$metado  =  (isset($_GET['event']))  ?  $_GET['event'] : 'index';
require_once 'app/Controller/'.$class.'.php';
$obj = new $class();
$obj->$metado();




