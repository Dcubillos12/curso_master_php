<?php

function controlers_autoload($classname){
    include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controlers_autoload');
