#!/usr/bin/env php
<?php

fwrite( STDERR, "Are you sure (y/n): " );

if( fread( STDIN, 1 ) != 'y' ) { die(1); }

fwrite( STDOUT, "\0337" ); // Save Position
for($i = 0; $i <= 100; $i += 5) {
	$step = intval($i / 10);
	fwrite( STDERR, "\0338"); // Restore Position
	fwrite( STDERR, "[\033[32m" . str_repeat('#', $step) . str_repeat('.', 10 - $step) . "\033[0m]"  ); // Write Colored Progress Bar
	fwrite( STDOUT, " {$i}% Complete" . PHP_EOL );
	fwrite( STDERR, "\033[1A"); //Move up, undo the PHP_EOL
	usleep( 100000 );
}

fwrite( STDERR, "\007" ); //Bell on completion

fwrite( STDERR, PHP_EOL );