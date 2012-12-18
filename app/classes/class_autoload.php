<?php
class class_autoload {
  function __construct() {

    spl_autoload_register(null, false);

    /*** specify extensions that may be loaded ***/
    spl_autoload_extensions('.php, .class.php');

    /*** class Loader ***/
    function classLoader($class)
    {
        $filename = $class . '.php';
        $file = CLASS_DIR . $filename;
        if (!file_exists($file))
        {
            return false;
        }

        include $file;
    }

    /*** register the loader functions ***/
    spl_autoload_register('classLoader');

      }
}

?>
