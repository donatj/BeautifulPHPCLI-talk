#!/usr/bin/env php
<?php

fwrite( STDERR, "Are you sure (y/n): " );
if( fread( STDIN, 1 ) == 'y' ) {
	fwrite( STDOUT, "Super Cool!" );
}else{
	fwrite( STDOUT, "LAME!" );
}

fwrite( STDOUT, PHP_EOL );