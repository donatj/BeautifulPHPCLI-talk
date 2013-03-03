#!/usr/bin/env php
<?php

fwrite( STDOUT, "\0337" );
for($i = 0; $i <= 100; $i += 5) {
	fwrite( STDOUT, "\0338" . "{$i}% Complete" );
	usleep( 100000 );
}
fwrite( STDOUT, PHP_EOL );