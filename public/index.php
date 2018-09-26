<?php

require "../vendor/autoload.php";

$speak = new App\Wcs\Hello();
echo $speak->talk()."<br/>";

$speak2 = new HelloWorld\SayHello();
echo $speak2->world();

?>