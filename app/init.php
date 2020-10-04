<?php

//llama a config
require_once 'config/config.php';

//llama a helpers
require_once 'helpers/url.php';

//carga las librerias
spl_autoload_register(function($className) {
    require_once 'libs/' . $className . '.php';
});