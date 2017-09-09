<?php

/* * ****************************************************************************
  Класс библиотека со всякими нужностями


 * ***************************************************************************** */

class Library {    
    public static $deBug = true;   

}
set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/View' . PATH_SEPARATOR . 'Classes/Controller' . PATH_SEPARATOR . 'Classes/Model' );

function __autoload($className) {

    $className = explode('\\', $className);
// Имя класса совпадает с именем файла без .php

    include_once $className[count($className) - 1] . '.php';
}
