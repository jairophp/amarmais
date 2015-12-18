<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 25/09/2015
 * Time: 17:01
 */

define('BASE', 'http://localhost/amarmais/');


// CONFIGRAï¿½ï¿½ES DO SITE ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'linux');
define('DBSA', 'amarmais');

// AUTO LOAD DE CLASSES ####################
function __autoload($Class) {

    $cDir = ['Conn','CRUD','Model','Helper', 'Controller'];
    $iDir = null;

    foreach ($cDir as $dirName):
        if (!$iDir && file_exists(__DIR__ . "/{$dirName}/{$Class}.php") && !is_dir(__DIR__ . "/{$dirName}/{$Class}.php")):
            include_once (__DIR__ . "/{$dirName}/{$Class}.php");
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possivel {$Class}.php");
        die;
    endif;
}