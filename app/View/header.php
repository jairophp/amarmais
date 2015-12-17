<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 21/10/2015
 * Time: 00:27
 */
include_once 'app/Config.inc.php';
?>
<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="icons/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/inicio.css">


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="cempocento" >
    <div class="faixa-top cempocento">
        <div class="menu-top oitentapocento">
            <p> <i class="fa fa-calendar azul"></i>
                <script>
                    data = new Date();
                    dia = data.getDate();
                    mes = data.getMonth();
                    ano = data.getFullYear();

                    meses = new Array(12);

                    meses[0] = "Janeiro";
                    meses[1] = "Fevereiro";
                    meses[2] = "Março";
                    meses[3] = "Abril";
                    meses[4] = "Maio";
                    meses[5] = "Junho";
                    meses[6] = "Julho";
                    meses[7] = "Agosto";
                    meses[8] = "Setembro";
                    meses[9] = "Outubro";
                    meses[10] = "Novembro";
                    meses[11] = "Dezembro";

                    document.write( dia + " de " + meses[mes] + " de " + ano);

                </script> &nbsp;&nbsp;&nbsp;<i class="fa fa-phone azul"></i> CONTATOS: (99) 9999-9999</p>
        </div>
    </div>
    <div class="topo oitentapocento">
        <img src="img/logo.jpg">
        <ul>
            <li><a class="navs active" href="#">HOME</a></li>
            <li><a class="navs" href="#">NOTICIAS</a></li>
            <li><a class="navs" href="#">EVENTOS</a></li>
            <li><a class="navs" href="#">QUEM SOMOS</a></li>
            <li><a class="navs" href="#">DOAÇÕES</a></li>
            <li><a class="navs" href="index.php?event=contato">CONTATOS</a></li>
        </ul>
    </div>

</header>
