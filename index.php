<?php
    //autload classes
    spl_autoload_register(function ($class) {
        if(file_exists('./classes/' . $class . '.php')){
            require './classes/' . $class . '.php';
        }elseif(file_exists('./controllers/' . $class . '.php')){
            require './controllers/' . $class . '.php';
        }
    });

    require 'Routes.php';
?>