<?php

require "../vendor/autoload.php"; //Egyszerűbb hivatkozás a php-k-ra

use Slim\Factory\AppFactory; //Ahhoz kell, hogy létre tudjunk hozni egy SLIM alkalmazást

$app = AppFactory::create(); //Létrehoztuk a SLIM appot