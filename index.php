<?php

require __DIR__.'/Autoloader.php';

use Core\User;
use Core\Support;
use Core\Admin;

$User = new User("Pavel", "Lavin", "Male", "18");
$Support = new Support("Alina", "Naumova", "Female", "24");
$Admin = new Admin("Vova", "Gavrylov", "Male", "21");

$User->editFirstName("Armin");
$User->editLastName("Buuren");

$Support->ban($User);
$Support->unban($User);

$Admin->delete($User);
