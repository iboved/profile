<?php

class Autoloader
{
    public static function loadPackages($className)
    {
        $pathParts = explode('\\', $className);
        $loadedFilename = implode(DIRECTORY_SEPARATOR, $pathParts) . '.php';
        if (file_exists($loadedFilename)) {
            require_once($loadedFilename);
        }
    }
}

spl_autoload_register(array('Autoloader', 'loadPackages'));