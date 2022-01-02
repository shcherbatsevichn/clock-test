<?php

use classes\Converter;
use classes\Validation;

function autoload($class){
    $root = $_SERVER['DOCUMENT_ROOT'];
    $class = str_replace("\\", '/', $class);
    $file = $root."/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register("autoload");

//require "../classes/converter.php";
//require "../classes/validation.php";


if(isset($_POST['info'])){
    $result = ['clock' => '',
        'rad' => 0
    ];
    $data = new classes\Validation($_POST['info']);
    if($data->Validation()){    
        $result['clock'] = $data->getClock();
        $result['rad'] = strval($data->getRadian());
    }
    else{
        $result['clock'] = 'ERROR';
    }
    echo json_encode($result);
}