<?php

require __DIR__.'/Autoloader.php';

use Core\User;
use Core\Support;
use Core\Admin;

$User = new User("Pavel", "Lavin", "Female", "18");
var_dump($User);

$Support = new Support("Alina", "Naumova", "Female", "24");
var_dump($Support);
$Support->ban($User);
var_dump($User);
$Support->unban($User);
var_dump($User);
