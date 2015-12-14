<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 01/12/15
 * Time: 21:31
 */

$class  = $_GET['c'];
$metado = $_GET['m'];
require_once 'app/Controller/'.$class.'.php';
$obj = new $class();
$obj->$metado();