<?php
//made to work with a PSR-0 Autoloader
spl_autoload_register(function($class){
	require('lib/' . str_replace('\\', '/', $class) . '.php');
});

for ($i = 0; $i <= 345; $i++) {
	CLI\StatusGUI::progressbar('Progress Bar', $i, 345, -1, 1);
	usleep(30000);
}
print PHP_EOL;
