<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function view($template, $vars = array()){
    extract($vars);
    require "views/$template.tpl.php";
}
function controller($name){
    $file = "controllers/$name.php";
    if(file_exists($file)){
        require $file;
    }else{
        header("HTTP/1.0 404 Not Found");
        exit("Pagina no Existe");
    }
}
