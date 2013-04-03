#!/usr/bin/env php
<?php

fwrite( STDERR, "\0337" ); // Save Position
for($i = 0; $i <= 100; $i += 5) {
	$step = intval($i / 10);
	fwrite( STDERR, "\0338"); // Restore Position
	fwrite( STDERR, '[' . str_repeat('#', $step) . str_repeat('.', 10 - $step) . ']'  ); // Write Progress Bar
	fwrite( STDOUT, " {$i}% Complete" . PHP_EOL );
	fwrite( STDERR, "\033[1A"); //Move up, undo the PHP_EOL
	usleep( 100000 );
}
fwrite( STDERR, PHP_EOL );