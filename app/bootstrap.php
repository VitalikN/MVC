<?php
// load Config
require_once 'config/config.php';

// Autolode Core Libraries
spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});