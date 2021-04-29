<?php

spl_autoload_register(function ($classname) {
    /*
    echo '<br>' . $classname;
    //echo '<br>' . __DIR__;
    echo '<br>' . __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;
    */
    // require_once __DIR__ . '\\' . $classname . '.php';

    // pour la portabilité sur les OS autres que windows :
    require_once __DIR__ . DIRECTORY_SEPARATOR .
        str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;
});
