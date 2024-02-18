<?php 
    //carga las clases
    spl_autoload_register(function($clase){
        //obtiene el valor de la ruta de las clases
        $archivo = __DIR__."/".$clase.".php"; 
        $archivo = str_replace("\\","/",$archivo);

        if(is_file($archivo)){
            require_once $archivo;
        }
    });